<?php

namespace ATL15\GoogleAnalyticsBundle\Controller;

use ATL15\GoogleAnalyticsBundle\Src\GoogleApi\Auth\OAuth2,
    ATL15\GoogleAnalyticsBundle\Src\GoogleApi\Contrib\AnalyticsService,
    ATL15\GoogleAnalyticsBundle\Src\GoogleApi\Contrib\Oauth2Service,
    Symfony\Bundle\FrameworkBundle\Controller\Controller,
    ATL15\GoogleAnalyticsBundle\Src\GoogleApi\GoogleClient,
    ATL15\GoogleAnalyticsBundle\Src\GoogleApi\Contrib\Google_AnalyticsService,
    Symfony\Component\HttpFoundation\Request,
    Symfony\Component\HttpFoundation\Session\Session,
    Symfony\Component\HttpFoundation\JsonResponse;

class GoogleAnalyticsController extends Controller
{
    public      $available_metrics = array("visitors", "newVisits", "percentNewVisits", "visits", "bounces", "pageviews"),
                $available_dimensions = array("date", "year", "month", "week", "day", "hour", "yearWeek", "dateHour", "nthMonth", "nthWeek", "nthDay", "isoWeek", "dayOfWeek", "dayOfWeekName");

    protected   $app_name,
                $client_id,
                $client_secret,
                $developer_key,
                $redirect_uri,
                $analytics_account,
                $analytics;

    private     $query_builder,
                $start_date,
                $end_date,
                $metrics = array(),
                $dimensions = array(),
                $fields = array(),
                $client,
                $authUrl,
                $oauth,
                $session,
                $request;


    public function __construct(Request $request, Session $session, $app_name, $client_id, $client_secret, $developer_key, $redirect_uri, $analytics_account)
    {
        $this->app_name             = $app_name;
        $this->client_id            = $client_id;
        $this->client_secret        = $client_secret;
        $this->developer_key        = $developer_key;
        $this->redirect_uri         = $redirect_uri;
        $this->analytics_account    = $analytics_account;
        $this->session              = $session;
        $this->request              = $request;

        $this->setClient();

        if($this->session->get('google_token')) {
            $this->client->setAccessToken($session->get('google_token'));
        }

        $this->analytics = new AnalyticsService($this->client);
    }

    /**
     * @return bool
     */
    public function isAuthenticated()
    {
        if(!$this->client->getAccessToken()) {
            $this->setAuthUrl();
            return false;
        }

        return true;
    }

    private function setClient()
    {
        $client = new GoogleClient();
        $client->setApplicationName($this->app_name);
        $client->setClientId($this->client_id);
        $client->setClientSecret($this->client_secret);
        $client->setRedirectUri($this->redirect_uri);
        $client->setDeveloperKey($this->developer_key);
        $client->setUseObjects(true);

        $client->setScopes(
            array(
                'https://www.googleapis.com/auth/analytics.readonly',
                'https://www.googleapis.com/auth/userinfo.email',
                'https://www.googleapis.com/auth/userinfo.profile'
            )
        );

        $this->oauth = new Oauth2Service($client);
        $this->client = $client;
    }

    /**
     * @return mixed
     */
    public function getClient()
    {
        return $this->client;
    }


    private function setAuthUrl()
    {
        if(!$this->client->getAuthenticated()) {
            $this->authUrl = $this->client->createAuthUrl();
        }
    }

    /**
     * @return mixed
     */
    public function getAuthUrl()
    {
        return $this->authUrl;
    }

    /**
     * @return bool|mixed
     */
    public function getUser()
    {
        if(!$this->client->getAccessToken()) {
            return false;
        }

        return $this->oauth->userinfo->get();
    }

    /**
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function authenticateAction(Request $request)
    {
        $this->client->authenticate($request->get('code'));
        $this->client->setAccessToken($this->client->getAccessToken());

        $this->session->set('google_token', $this->client->getAccessToken());

        return $this->redirect('admin');
    }

    public function logoutAction()
    {

    }

    /**
     * @param null $date
     * @param string $type
     * @return \ATL15\GoogleAnalyticsBundle\Src\GoogleApi\Contrib\GaData
     */
    public function getDailyReport($date = null, $type = 'visits')
    {
        $data = null;

        if($date == null) {
            $date = date('Y-m-d');
            $data = array("dimensions" => "ga:day, ga:hour");
        }

        return $this->analytics->data_ga->get('ga:' . $this->analytics_account, $date, $date, 'ga:'.$type, $data);
    }


    public function getWeeklyReports()
    {

    }

    /**
     * @param string $type
     * @return \ATL15\GoogleAnalyticsBundle\Src\GoogleApi\Contrib\GaData
     */
    public function getMonthlyReports($type = 'visits')
    {
        return $this->analytics->data_ga->get(
            'ga:' . $this->analytics_account,
            date('Y-m').'-01',
            date('Y-m-d'),
            'ga:'.$type,
            array(
                'dimensions' => 'ga:date'
            )
        );
    }

    /**
     * @return $this
     */
    public function queryBuilder()
    {
        $this->query_builder = $this->analytics->data_ga;

        return $this;
    }

    /**
     * @param $start
     * @return $this
     */
    public function setStartDate($start)
    {
        $this->start_date = $start;

        return $this;
    }

    /**
     * @param $end
     * @return $this
     */
    public function setEndDate($end)
    {
        $this->end_date = $end;

        return $this;
    }

    /**
     * @param $metric
     * @return $this
     * @throws \Exception
     */
    public function addMetric($metric)
    {
        if(is_array($metric)) {
            foreach($metric as $m) {
                if($this->checkMetricExists($m)) {
                    $this->metrics[] = "ga:".$m;
                }
            }
        } else {
            if($this->checkMetricExists($metric)) {
                $this->metrics[] = "ga:".$metric;
            }
        }

        return $this;
    }

    /**
     * @param $metric
     * @return bool
     * @throws \Exception
     */
    private function checkMetricExists($metric)
    {
        if(in_array($metric, $this->available_metrics)) {
            return true;
        } else {
            throw new \Exception("'$metric' not available these are the available metrics: '".implode(', ',$this->available_metrics)."'");
        }
    }

    /**
     * @param $dimension
     * @return $this
     * @throws \Exception
     */
    public function addDimension($dimension)
    {
        if(is_array($dimension)) {
            foreach($dimension as $d) {
                if($this->checkDimensionExists($d)) {
                    $this->dimensions[] = "ga:".$d;
                }
            }
        } else {
            if($this->checkDimensionExists($dimension)) {
                $this->dimensions[] = "ga:".$dimension;
            }
        }

        return $this;
    }

    /**
     * @param $dimension
     * @return bool
     * @throws \Exception
     */
    private function checkDimensionExists($dimension)
    {
        if(in_array($dimension, $this->available_dimensions)) {
            return true;
        } else {
            throw new \Exception("'$dimension' not available these are the available dimensions: '".implode(', ',$this->available_dimensions)."'");
        }
    }

    public function addField($field)
    {
        $this->fields[] = $field;
    }

    public function addOther()
    {

    }

    /**
     * @return mixed
     */
    public function getResults()
    {
        return $this->query_builder->get("ga:".$this->analytics_account, $this->start_date, $this->end_date, implode(",", $this->metrics), array('dimensions' => implode(",", $this->dimensions)));
    }
}