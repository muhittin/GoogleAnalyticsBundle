<?php

namespace ATL15\GoogleAnalyticsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller,
    Symfony\Component\HttpFoundation\Request,
    Symfony\Component\HttpFoundation\Session\Session,
    ATL15\GoogleAnalyticsBundle\Src\BasicAuth\Gapi;

class GoogleAnalyticsBasicAuthController extends Controller
{
    public
        $available_metrics = array("visitors", "newVisits", "percentNewVisits", "visits", "bounces", "pageviews"),
        $available_dimensions = array("date", "year", "month", "week", "day", "hour", "yearWeek", "dateHour", "nthMonth", "nthWeek", "nthDay", "isoWeek", "dayOfWeek", "dayOfWeekName");

    protected
        $analytics_username,
        $analytics_password,
        $analytics_account,
        $analytics;

    private
        $metrics = array(),
        $dimensions = array(),
        $session,
        $request;


    public function __construct(Request $request, Session $session, $analytics_parameters)
    {
        $this->analytics_username   = $analytics_parameters["username"];
        $this->analytics_password   = $analytics_parameters["password"];
        $this->analytics_account    = $analytics_parameters["analytics_account"];
        $this->session              = $session;
        $this->request              = $request;

        $this->analytics            = new Gapi($this->analytics_username, $this->analytics_password);
    }
    public function createQuery($account = false) {

        if($account)
            $this->analytics_account = $account;

        $this->dimensions = false;
        $this->metrics = false;

        return $this;
    }

    public function setDimensions(array $dimensions) {
        $this->dimensions = $dimensions;
        return $this;
    }

    public function setMetrics(array $metrics) {
        $this->metrics = $metrics;
        return $this;
    }

    public function getResults() {
        if($this->dimensions AND $this->metrics) {
            $this->analytics->requestReportData($this->analytics_account, $this->dimensions, $this->metrics);
            return $this->analytics->getResults();
        }
        else {
            throw new \Exception("You must define dimensions and metrics for get result");
        }
    }
}