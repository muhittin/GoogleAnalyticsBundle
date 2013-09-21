<?php
/*
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */

namespace ATL15\GoogleAnalyticsBundle\Src\GoogleApi\Contrib;

use ATL15\GoogleAnalyticsBundle\Src\GoogleApi\Service\ServiceResource;
use ATL15\GoogleAnalyticsBundle\Src\GoogleApi\Service\GoogleService;
use ATL15\GoogleAnalyticsBundle\Src\GoogleApi\Service\GoogleModel;
use ATL15\GoogleAnalyticsBundle\Src\GoogleApi\GoogleClient;

/**
 * The "data" collection of methods.
 * Typical usage is:
 *  <code>
 *   $analyticsService = new AnalyticsService(...);
 *   $data = $analyticsService->data;
 *  </code>
 */

class DataServiceResource extends ServiceResource {

}

/**
 * The "ga" collection of methods.
 * Typical usage is:
 *  <code>
 *   $analyticsService = new AnalyticsService(...);
 *   $ga = $analyticsService->ga;
 *  </code>
 */
class DataGaServiceResource extends ServiceResource {

    /**
     * Returns Analytics data for a view (profile). (ga.get)
     *
     * @param string $ids Unique table ID for retrieving Analytics data. Table ID is of the form ga:XXXX, where XXXX is the Analytics view (profile) ID.
     * @param string $start_date Start date for fetching Analytics data. All requests should specify a start date formatted as YYYY-MM-DD.
     * @param string $end_date End date for fetching Analytics data. All requests should specify an end date formatted as YYYY-MM-DD.
     * @param string $metrics A comma-separated list of Analytics metrics. E.g., 'ga:visits,ga:pageviews'. At least one metric must be specified.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string dimensions A comma-separated list of Analytics dimensions. E.g., 'ga:browser,ga:city'.
     * @opt_param string filters A comma-separated list of dimension or metric filters to be applied to Analytics data.
     * @opt_param int max-results The maximum number of entries to include in this feed.
     * @opt_param string segment An Analytics advanced segment to be applied to data.
     * @opt_param string sort A comma-separated list of dimensions or metrics that determine the sort order for Analytics data.
     * @opt_param int start-index An index of the first entity to retrieve. Use this parameter as a pagination mechanism along with the max-results parameter.
     * @return GaData
     */
    public function get($ids, $start_date, $end_date, $metrics, $optParams = array()) {
        $params = array('ids' => $ids, 'start-date' => $start_date, 'end-date' => $end_date, 'metrics' => $metrics);
        $params = array_merge($params, $optParams);
        $data = $this->__call('get', array($params));
        if ($this->useObjects()) {
            return new GaData($data);
        } else {
            return $data;
        }
    }
}
/**
 * The "mcf" collection of methods.
 * Typical usage is:
 *  <code>
 *   $analyticsService = new AnalyticsService(...);
 *   $mcf = $analyticsService->mcf;
 *  </code>
 */
class DataMcfServiceResource extends ServiceResource {

    /**
     * Returns Analytics Multi-Channel Funnels data for a view (profile). (mcf.get)
     *
     * @param string $ids Unique table ID for retrieving Analytics data. Table ID is of the form ga:XXXX, where XXXX is the Analytics view (profile) ID.
     * @param string $start_date Start date for fetching Analytics data. All requests should specify a start date formatted as YYYY-MM-DD.
     * @param string $end_date End date for fetching Analytics data. All requests should specify an end date formatted as YYYY-MM-DD.
     * @param string $metrics A comma-separated list of Multi-Channel Funnels metrics. E.g., 'mcf:totalConversions,mcf:totalConversionValue'. At least one metric must be specified.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string dimensions A comma-separated list of Multi-Channel Funnels dimensions. E.g., 'mcf:source,mcf:medium'.
     * @opt_param string filters A comma-separated list of dimension or metric filters to be applied to the Analytics data.
     * @opt_param int max-results The maximum number of entries to include in this feed.
     * @opt_param string sort A comma-separated list of dimensions or metrics that determine the sort order for the Analytics data.
     * @opt_param int start-index An index of the first entity to retrieve. Use this parameter as a pagination mechanism along with the max-results parameter.
     * @return McfData
     */
    public function get($ids, $start_date, $end_date, $metrics, $optParams = array()) {
        $params = array('ids' => $ids, 'start-date' => $start_date, 'end-date' => $end_date, 'metrics' => $metrics);
        $params = array_merge($params, $optParams);
        $data = $this->__call('get', array($params));
        if ($this->useObjects()) {
            return new McfData($data);
        } else {
            return $data;
        }
    }
}
/**
 * The "realtime" collection of methods.
 * Typical usage is:
 *  <code>
 *   $analyticsService = new AnalyticsService(...);
 *   $realtime = $analyticsService->realtime;
 *  </code>
 */
class DataRealtimeServiceResource extends ServiceResource {

    /**
     * Returns real-time data for a view (profile). (realtime.get)
     *
     * @param string $ids Unique table ID for retrieving Analytics data. Table ID is of the form ga:XXXX, where XXXX is the Analytics view (profile) ID.
     * @param string $metrics A comma-separated list of Analytics metrics. E.g., 'ga:visits,ga:pageviews'. At least one metric must be specified.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string dimensions A comma-separated list of real-time dimensions. E.g., 'ga:medium,ga:city'.
     * @opt_param string filters A comma-separated list of dimension or metric filters to be applied to real-time data.
     * @opt_param int max-results The maximum number of entries to include in this feed.
     * @opt_param string sort A comma-separated list of dimensions or metrics that determine the sort order for real-time data.
     * @return RealtimeData
     */
    public function get($ids, $metrics, $optParams = array()) {
        $params = array('ids' => $ids, 'metrics' => $metrics);
        $params = array_merge($params, $optParams);
        $data = $this->__call('get', array($params));
        if ($this->useObjects()) {
            return new RealtimeData($data);
        } else {
            return $data;
        }
    }
}

/**
 * The "management" collection of methods.
 * Typical usage is:
 *  <code>
 *   $analyticsService = new AnalyticsService(...);
 *   $management = $analyticsService->management;
 *  </code>
 */
class ManagementServiceResource extends ServiceResource {

}

/**
 * The "accounts" collection of methods.
 * Typical usage is:
 *  <code>
 *   $analyticsService = new AnalyticsService(...);
 *   $accounts = $analyticsService->accounts;
 *  </code>
 */
class ManagementAccountsServiceResource extends ServiceResource {

    /**
     * Lists all accounts to which the user has access. (accounts.list)
     *
     * @param array $optParams Optional parameters.
     *
     * @opt_param int max-results The maximum number of accounts to include in this response.
     * @opt_param int start-index An index of the first account to retrieve. Use this parameter as a pagination mechanism along with the max-results parameter.
     * @return Accounts
     */
    public function listManagementAccounts($optParams = array()) {
        $params = array();
        $params = array_merge($params, $optParams);
        $data = $this->__call('list', array($params));
        if ($this->useObjects()) {
            return new Accounts($data);
        } else {
            return $data;
        }
    }
}
/**
 * The "customDataSources" collection of methods.
 * Typical usage is:
 *  <code>
 *   $analyticsService = new AnalyticsService(...);
 *   $customDataSources = $analyticsService->customDataSources;
 *  </code>
 */
class ManagementCustomDataSourcesServiceResource extends ServiceResource {

    /**
     * List custom data sources to which the user has access.
     * (customDataSources.list)
     *
     * @param string $accountId Account Id for the custom data sources to retrieve.
     * @param string $webPropertyId Web property Id for the custom data sources to retrieve.
     * @param array $optParams Optional parameters.
     *
     * @opt_param int max-results The maximum number of custom data sources to include in this response.
     * @opt_param int start-index A 1-based index of the first custom data source to retrieve. Use this parameter as a pagination mechanism along with the max-results parameter.
     * @return CustomDataSources
     */
    public function listManagementCustomDataSources($accountId, $webPropertyId, $optParams = array()) {
        $params = array('accountId' => $accountId, 'webPropertyId' => $webPropertyId);
        $params = array_merge($params, $optParams);
        $data = $this->__call('list', array($params));
        if ($this->useObjects()) {
            return new CustomDataSources($data);
        } else {
            return $data;
        }
    }
}
/**
 * The "dailyUploads" collection of methods.
 * Typical usage is:
 *  <code>
 *   $analyticsService = new AnalyticsService(...);
 *   $dailyUploads = $analyticsService->dailyUploads;
 *  </code>
 */
class ManagementDailyUploadsServiceResource extends ServiceResource {

    /**
     * Delete uploaded data for the given date. (dailyUploads.delete)
     *
     * @param string $accountId Account Id associated with daily upload delete.
     * @param string $webPropertyId Web property Id associated with daily upload delete.
     * @param string $customDataSourceId Custom data source Id associated with daily upload delete.
     * @param string $date Date for which data is to be deleted. Date should be formatted as YYYY-MM-DD.
     * @param string $type Type of data for this delete.
     * @param array $optParams Optional parameters.
     */
    public function delete($accountId, $webPropertyId, $customDataSourceId, $date, $type, $optParams = array()) {
        $params = array('accountId' => $accountId, 'webPropertyId' => $webPropertyId, 'customDataSourceId' => $customDataSourceId, 'date' => $date, 'type' => $type);
        $params = array_merge($params, $optParams);
        $data = $this->__call('delete', array($params));
        return $data;
    }
    /**
     * List daily uploads to which the user has access. (dailyUploads.list)
     *
     * @param string $accountId Account Id for the daily uploads to retrieve.
     * @param string $webPropertyId Web property Id for the daily uploads to retrieve.
     * @param string $customDataSourceId Custom data source Id for daily uploads to retrieve.
     * @param string $start_date Start date of the form YYYY-MM-DD.
     * @param string $end_date End date of the form YYYY-MM-DD.
     * @param array $optParams Optional parameters.
     *
     * @opt_param int max-results The maximum number of custom data sources to include in this response.
     * @opt_param int start-index A 1-based index of the first daily upload to retrieve. Use this parameter as a pagination mechanism along with the max-results parameter.
     * @return DailyUploads
     */
    public function listManagementDailyUploads($accountId, $webPropertyId, $customDataSourceId, $start_date, $end_date, $optParams = array()) {
        $params = array('accountId' => $accountId, 'webPropertyId' => $webPropertyId, 'customDataSourceId' => $customDataSourceId, 'start-date' => $start_date, 'end-date' => $end_date);
        $params = array_merge($params, $optParams);
        $data = $this->__call('list', array($params));
        if ($this->useObjects()) {
            return new DailyUploads($data);
        } else {
            return $data;
        }
    }
    /**
     * Update/Overwrite data for a custom data source. (dailyUploads.upload)
     *
     * @param string $accountId Account Id associated with daily upload.
     * @param string $webPropertyId Web property Id associated with daily upload.
     * @param string $customDataSourceId Custom data source Id to which the data being uploaded belongs.
     * @param string $date Date for which data is uploaded. Date should be formatted as YYYY-MM-DD.
     * @param int $appendNumber Append number for this upload indexed from 1.
     * @param string $type Type of data for this upload.
     * @param array $optParams Optional parameters.
     *
     * @opt_param bool reset Reset/Overwrite all previous appends for this date and start over with this file as the first upload.
     * @return DailyUploadAppend
     */
    public function upload($accountId, $webPropertyId, $customDataSourceId, $date, $appendNumber, $type, $optParams = array()) {
        $params = array('accountId' => $accountId, 'webPropertyId' => $webPropertyId, 'customDataSourceId' => $customDataSourceId, 'date' => $date, 'appendNumber' => $appendNumber, 'type' => $type);
        $params = array_merge($params, $optParams);
        $data = $this->__call('upload', array($params));
        if ($this->useObjects()) {
            return new DailyUploadAppend($data);
        } else {
            return $data;
        }
    }
}
/**
 * The "experiments" collection of methods.
 * Typical usage is:
 *  <code>
 *   $analyticsService = new AnalyticsService(...);
 *   $experiments = $analyticsService->experiments;
 *  </code>
 */
class ManagementExperimentsServiceResource extends ServiceResource {

    /**
     * Delete an experiment. (experiments.delete)
     *
     * @param string $accountId Account ID to which the experiment belongs
     * @param string $webPropertyId Web property ID to which the experiment belongs
     * @param string $profileId View (Profile) ID to which the experiment belongs
     * @param string $experimentId ID of the experiment to delete
     * @param array $optParams Optional parameters.
     */
    public function delete($accountId, $webPropertyId, $profileId, $experimentId, $optParams = array()) {
        $params = array('accountId' => $accountId, 'webPropertyId' => $webPropertyId, 'profileId' => $profileId, 'experimentId' => $experimentId);
        $params = array_merge($params, $optParams);
        $data = $this->__call('delete', array($params));
        return $data;
    }
    /**
     * Returns an experiment to which the user has access. (experiments.get)
     *
     * @param string $accountId Account ID to retrieve the experiment for.
     * @param string $webPropertyId Web property ID to retrieve the experiment for.
     * @param string $profileId View (Profile) ID to retrieve the experiment for.
     * @param string $experimentId Experiment ID to retrieve the experiment for.
     * @param array $optParams Optional parameters.
     * @return Experiment
     */
    public function get($accountId, $webPropertyId, $profileId, $experimentId, $optParams = array()) {
        $params = array('accountId' => $accountId, 'webPropertyId' => $webPropertyId, 'profileId' => $profileId, 'experimentId' => $experimentId);
        $params = array_merge($params, $optParams);
        $data = $this->__call('get', array($params));
        if ($this->useObjects()) {
            return new Experiment($data);
        } else {
            return $data;
        }
    }
    /**
     * Create a new experiment. (experiments.insert)
     *
     * @param string $accountId Account ID to create the experiment for.
     * @param string $webPropertyId Web property ID to create the experiment for.
     * @param string $profileId View (Profile) ID to create the experiment for.
     * @param Experiment $postBody
     * @param array $optParams Optional parameters.
     * @return Experiment
     */
    public function insert($accountId, $webPropertyId, $profileId, Experiment $postBody, $optParams = array()) {
        $params = array('accountId' => $accountId, 'webPropertyId' => $webPropertyId, 'profileId' => $profileId, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        $data = $this->__call('insert', array($params));
        if ($this->useObjects()) {
            return new Experiment($data);
        } else {
            return $data;
        }
    }
    /**
     * Lists experiments to which the user has access. (experiments.list)
     *
     * @param string $accountId Account ID to retrieve experiments for.
     * @param string $webPropertyId Web property ID to retrieve experiments for.
     * @param string $profileId View (Profile) ID to retrieve experiments for.
     * @param array $optParams Optional parameters.
     *
     * @opt_param int max-results The maximum number of experiments to include in this response.
     * @opt_param int start-index An index of the first experiment to retrieve. Use this parameter as a pagination mechanism along with the max-results parameter.
     * @return Experiments
     */
    public function listManagementExperiments($accountId, $webPropertyId, $profileId, $optParams = array()) {
        $params = array('accountId' => $accountId, 'webPropertyId' => $webPropertyId, 'profileId' => $profileId);
        $params = array_merge($params, $optParams);
        $data = $this->__call('list', array($params));
        if ($this->useObjects()) {
            return new Experiments($data);
        } else {
            return $data;
        }
    }
    /**
     * Update an existing experiment. This method supports patch semantics.
     * (experiments.patch)
     *
     * @param string $accountId Account ID of the experiment to update.
     * @param string $webPropertyId Web property ID of the experiment to update.
     * @param string $profileId View (Profile) ID of the experiment to update.
     * @param string $experimentId Experiment ID of the experiment to update.
     * @param Experiment $postBody
     * @param array $optParams Optional parameters.
     * @return Experiment
     */
    public function patch($accountId, $webPropertyId, $profileId, $experimentId, Experiment $postBody, $optParams = array()) {
        $params = array('accountId' => $accountId, 'webPropertyId' => $webPropertyId, 'profileId' => $profileId, 'experimentId' => $experimentId, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        $data = $this->__call('patch', array($params));
        if ($this->useObjects()) {
            return new Experiment($data);
        } else {
            return $data;
        }
    }
    /**
     * Update an existing experiment. (experiments.update)
     *
     * @param string $accountId Account ID of the experiment to update.
     * @param string $webPropertyId Web property ID of the experiment to update.
     * @param string $profileId View (Profile) ID of the experiment to update.
     * @param string $experimentId Experiment ID of the experiment to update.
     * @param Experiment $postBody
     * @param array $optParams Optional parameters.
     * @return Experiment
     */
    public function update($accountId, $webPropertyId, $profileId, $experimentId, Experiment $postBody, $optParams = array()) {
        $params = array('accountId' => $accountId, 'webPropertyId' => $webPropertyId, 'profileId' => $profileId, 'experimentId' => $experimentId, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        $data = $this->__call('update', array($params));
        if ($this->useObjects()) {
            return new Experiment($data);
        } else {
            return $data;
        }
    }
}
/**
 * The "goals" collection of methods.
 * Typical usage is:
 *  <code>
 *   $analyticsService = new AnalyticsService(...);
 *   $goals = $analyticsService->goals;
 *  </code>
 */
class ManagementGoalsServiceResource extends ServiceResource {

    /**
     * Lists goals to which the user has access. (goals.list)
     *
     * @param string $accountId Account ID to retrieve goals for. Can either be a specific account ID or '~all', which refers to all the accounts that user has access to.
     * @param string $webPropertyId Web property ID to retrieve goals for. Can either be a specific web property ID or '~all', which refers to all the web properties that user has access to.
     * @param string $profileId View (Profile) ID to retrieve goals for. Can either be a specific view (profile) ID or '~all', which refers to all the views (profiles) that user has access to.
     * @param array $optParams Optional parameters.
     *
     * @opt_param int max-results The maximum number of goals to include in this response.
     * @opt_param int start-index An index of the first goal to retrieve. Use this parameter as a pagination mechanism along with the max-results parameter.
     * @return Goals
     */
    public function listManagementGoals($accountId, $webPropertyId, $profileId, $optParams = array()) {
        $params = array('accountId' => $accountId, 'webPropertyId' => $webPropertyId, 'profileId' => $profileId);
        $params = array_merge($params, $optParams);
        $data = $this->__call('list', array($params));
        if ($this->useObjects()) {
            return new Goals($data);
        } else {
            return $data;
        }
    }
}
/**
 * The "profiles" collection of methods.
 * Typical usage is:
 *  <code>
 *   $analyticsService = new AnalyticsService(...);
 *   $profiles = $analyticsService->profiles;
 *  </code>
 */
class ManagementProfilesServiceResource extends ServiceResource {

    /**
     * Lists views (profiles) to which the user has access. (profiles.list)
     *
     * @param string $accountId Account ID for the view (profiles) to retrieve. Can either be a specific account ID or '~all', which refers to all the accounts to which the user has access.
     * @param string $webPropertyId Web property ID for the views (profiles) to retrieve. Can either be a specific web property ID or '~all', which refers to all the web properties to which the user has access.
     * @param array $optParams Optional parameters.
     *
     * @opt_param int max-results The maximum number of views (profiles) to include in this response.
     * @opt_param int start-index An index of the first entity to retrieve. Use this parameter as a pagination mechanism along with the max-results parameter.
     * @return Profiles
     */
    public function listManagementProfiles($accountId, $webPropertyId, $optParams = array()) {
        $params = array('accountId' => $accountId, 'webPropertyId' => $webPropertyId);
        $params = array_merge($params, $optParams);
        $data = $this->__call('list', array($params));
        if ($this->useObjects()) {
            return new Profiles($data);
        } else {
            return $data;
        }
    }
}
/**
 * The "segments" collection of methods.
 * Typical usage is:
 *  <code>
 *   $analyticsService = new AnalyticsService(...);
 *   $segments = $analyticsService->segments;
 *  </code>
 */
class ManagementSegmentsServiceResource extends ServiceResource {

    /**
     * Lists advanced segments to which the user has access. (segments.list)
     *
     * @param array $optParams Optional parameters.
     *
     * @opt_param int max-results The maximum number of advanced segments to include in this response.
     * @opt_param int start-index An index of the first advanced segment to retrieve. Use this parameter as a pagination mechanism along with the max-results parameter.
     * @return Segments
     */
    public function listManagementSegments($optParams = array()) {
        $params = array();
        $params = array_merge($params, $optParams);
        $data = $this->__call('list', array($params));
        if ($this->useObjects()) {
            return new Segments($data);
        } else {
            return $data;
        }
    }
}
/**
 * The "webproperties" collection of methods.
 * Typical usage is:
 *  <code>
 *   $analyticsService = new AnalyticsService(...);
 *   $webproperties = $analyticsService->webproperties;
 *  </code>
 */
class ManagementWebpropertiesServiceResource extends ServiceResource {

    /**
     * Lists web properties to which the user has access. (webproperties.list)
     *
     * @param string $accountId Account ID to retrieve web properties for. Can either be a specific account ID or '~all', which refers to all the accounts that user has access to.
     * @param array $optParams Optional parameters.
     *
     * @opt_param int max-results The maximum number of web properties to include in this response.
     * @opt_param int start-index An index of the first entity to retrieve. Use this parameter as a pagination mechanism along with the max-results parameter.
     * @return Webproperties
     */
    public function listManagementWebproperties($accountId, $optParams = array()) {
        $params = array('accountId' => $accountId);
        $params = array_merge($params, $optParams);
        $data = $this->__call('list', array($params));
        if ($this->useObjects()) {
            return new Webproperties($data);
        } else {
            return $data;
        }
    }
}

/**
 * Service definition for Analytics (v3).
 *
 * <p>
 * View and manage your Google Analytics data
 * </p>
 *
 * <p>
 * For more information about this service, see the
 * <a href="https://developers.google.com/analytics/" target="_blank">API Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class AnalyticsService extends GoogleService {
    public $data_ga;
    public $data_mcf;
    public $data_realtime;
    public $management_accounts;
    public $management_customDataSources;
    public $management_dailyUploads;
    public $management_experiments;
    public $management_goals;
    public $management_profiles;
    public $management_segments;
    public $management_webproperties;
    /**
     * Constructs the internal representation of the Analytics service.
     *
     * @param GoogleClient $client
     */
    public function __construct(GoogleClient $client) {
        $this->servicePath = 'analytics/v3/';
        $this->version = 'v3';
        $this->serviceName = 'analytics';

        $client->addService($this->serviceName, $this->version);
        $this->data_ga = new DataGaServiceResource($this, $this->serviceName, 'ga', json_decode('{"methods": {"get": {"id": "analytics.data.ga.get", "path": "data/ga", "httpMethod": "GET", "parameters": {"dimensions": {"type": "string", "location": "query"}, "end-date": {"type": "string", "required": true, "location": "query"}, "filters": {"type": "string", "location": "query"}, "ids": {"type": "string", "required": true, "location": "query"}, "max-results": {"type": "integer", "format": "int32", "location": "query"}, "metrics": {"type": "string", "required": true, "location": "query"}, "segment": {"type": "string", "location": "query"}, "sort": {"type": "string", "location": "query"}, "start-date": {"type": "string", "required": true, "location": "query"}, "start-index": {"type": "integer", "format": "int32", "minimum": "1", "location": "query"}}, "response": {"$ref": "GaData"}, "scopes": ["https://www.googleapis.com/auth/analytics", "https://www.googleapis.com/auth/analytics.readonly"]}}}', true));
        $this->data_mcf = new DataMcfServiceResource($this, $this->serviceName, 'mcf', json_decode('{"methods": {"get": {"id": "analytics.data.mcf.get", "path": "data/mcf", "httpMethod": "GET", "parameters": {"dimensions": {"type": "string", "location": "query"}, "end-date": {"type": "string", "required": true, "location": "query"}, "filters": {"type": "string", "location": "query"}, "ids": {"type": "string", "required": true, "location": "query"}, "max-results": {"type": "integer", "format": "int32", "location": "query"}, "metrics": {"type": "string", "required": true, "location": "query"}, "sort": {"type": "string", "location": "query"}, "start-date": {"type": "string", "required": true, "location": "query"}, "start-index": {"type": "integer", "format": "int32", "minimum": "1", "location": "query"}}, "response": {"$ref": "McfData"}, "scopes": ["https://www.googleapis.com/auth/analytics", "https://www.googleapis.com/auth/analytics.readonly"]}}}', true));
        $this->data_realtime = new DataRealtimeServiceResource($this, $this->serviceName, 'realtime', json_decode('{"methods": {"get": {"id": "analytics.data.realtime.get", "path": "data/realtime", "httpMethod": "GET", "parameters": {"dimensions": {"type": "string", "location": "query"}, "filters": {"type": "string", "location": "query"}, "ids": {"type": "string", "required": true, "location": "query"}, "max-results": {"type": "integer", "format": "int32", "location": "query"}, "metrics": {"type": "string", "required": true, "location": "query"}, "sort": {"type": "string", "location": "query"}}, "response": {"$ref": "RealtimeData"}, "scopes": ["https://www.googleapis.com/auth/analytics", "https://www.googleapis.com/auth/analytics.readonly"]}}}', true));
        $this->management_accounts = new ManagementAccountsServiceResource($this, $this->serviceName, 'accounts', json_decode('{"methods": {"list": {"id": "analytics.management.accounts.list", "path": "management/accounts", "httpMethod": "GET", "parameters": {"max-results": {"type": "integer", "format": "int32", "location": "query"}, "start-index": {"type": "integer", "format": "int32", "minimum": "1", "location": "query"}}, "response": {"$ref": "Accounts"}, "scopes": ["https://www.googleapis.com/auth/analytics", "https://www.googleapis.com/auth/analytics.readonly"]}}}', true));
        $this->management_customDataSources = new ManagementCustomDataSourcesServiceResource($this, $this->serviceName, 'customDataSources', json_decode('{"methods": {"list": {"id": "analytics.management.customDataSources.list", "path": "management/accounts/{accountId}/webproperties/{webPropertyId}/customDataSources", "httpMethod": "GET", "parameters": {"accountId": {"type": "string", "required": true, "location": "path"}, "max-results": {"type": "integer", "format": "int32", "minimum": "1", "location": "query"}, "start-index": {"type": "integer", "format": "int32", "minimum": "1", "location": "query"}, "webPropertyId": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "CustomDataSources"}, "scopes": ["https://www.googleapis.com/auth/analytics", "https://www.googleapis.com/auth/analytics.readonly"]}}}', true));
        $this->management_dailyUploads = new ManagementDailyUploadsServiceResource($this, $this->serviceName, 'dailyUploads', json_decode('{"methods": {"delete": {"id": "analytics.management.dailyUploads.delete", "path": "management/accounts/{accountId}/webproperties/{webPropertyId}/customDataSources/{customDataSourceId}/dailyUploads/{date}", "httpMethod": "DELETE", "parameters": {"accountId": {"type": "string", "required": true, "location": "path"}, "customDataSourceId": {"type": "string", "required": true, "location": "path"}, "date": {"type": "string", "required": true, "location": "path"}, "type": {"type": "string", "required": true, "enum": ["cost"], "location": "query"}, "webPropertyId": {"type": "string", "required": true, "location": "path"}}, "scopes": ["https://www.googleapis.com/auth/analytics"]}, "list": {"id": "analytics.management.dailyUploads.list", "path": "management/accounts/{accountId}/webproperties/{webPropertyId}/customDataSources/{customDataSourceId}/dailyUploads", "httpMethod": "GET", "parameters": {"accountId": {"type": "string", "required": true, "location": "path"}, "customDataSourceId": {"type": "string", "required": true, "location": "path"}, "end-date": {"type": "string", "required": true, "location": "query"}, "max-results": {"type": "integer", "format": "int32", "minimum": "1", "location": "query"}, "start-date": {"type": "string", "required": true, "location": "query"}, "start-index": {"type": "integer", "format": "int32", "minimum": "1", "location": "query"}, "webPropertyId": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "DailyUploads"}, "scopes": ["https://www.googleapis.com/auth/analytics", "https://www.googleapis.com/auth/analytics.readonly"]}, "upload": {"id": "analytics.management.dailyUploads.upload", "path": "management/accounts/{accountId}/webproperties/{webPropertyId}/customDataSources/{customDataSourceId}/dailyUploads/{date}/uploads", "httpMethod": "POST", "parameters": {"accountId": {"type": "string", "required": true, "location": "path"}, "appendNumber": {"type": "integer", "required": true, "format": "int32", "minimum": "1", "maximum": "20", "location": "query"}, "customDataSourceId": {"type": "string", "required": true, "location": "path"}, "date": {"type": "string", "required": true, "location": "path"}, "reset": {"type": "boolean", "default": "false", "location": "query"}, "type": {"type": "string", "required": true, "enum": ["cost"], "location": "query"}, "webPropertyId": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "DailyUploadAppend"}, "scopes": ["https://www.googleapis.com/auth/analytics"], "supportsMediaUpload": true, "mediaUpload": {"accept": ["application/octet-stream"], "maxSize": "5MB", "protocols": {"simple": {"multipart": true, "path": "/upload/analytics/v3/management/accounts/{accountId}/webproperties/{webPropertyId}/customDataSources/{customDataSourceId}/dailyUploads/{date}/uploads"}, "resumable": {"multipart": true, "path": "/resumable/upload/analytics/v3/management/accounts/{accountId}/webproperties/{webPropertyId}/customDataSources/{customDataSourceId}/dailyUploads/{date}/uploads"}}}}}}', true));
        $this->management_experiments = new ManagementExperimentsServiceResource($this, $this->serviceName, 'experiments', json_decode('{"methods": {"delete": {"id": "analytics.management.experiments.delete", "path": "management/accounts/{accountId}/webproperties/{webPropertyId}/profiles/{profileId}/experiments/{experimentId}", "httpMethod": "DELETE", "parameters": {"accountId": {"type": "string", "required": true, "location": "path"}, "experimentId": {"type": "string", "required": true, "location": "path"}, "profileId": {"type": "string", "required": true, "location": "path"}, "webPropertyId": {"type": "string", "required": true, "location": "path"}}, "scopes": ["https://www.googleapis.com/auth/analytics"]}, "get": {"id": "analytics.management.experiments.get", "path": "management/accounts/{accountId}/webproperties/{webPropertyId}/profiles/{profileId}/experiments/{experimentId}", "httpMethod": "GET", "parameters": {"accountId": {"type": "string", "required": true, "location": "path"}, "experimentId": {"type": "string", "required": true, "location": "path"}, "profileId": {"type": "string", "required": true, "location": "path"}, "webPropertyId": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "Experiment"}, "scopes": ["https://www.googleapis.com/auth/analytics", "https://www.googleapis.com/auth/analytics.readonly"]}, "insert": {"id": "analytics.management.experiments.insert", "path": "management/accounts/{accountId}/webproperties/{webPropertyId}/profiles/{profileId}/experiments", "httpMethod": "POST", "parameters": {"accountId": {"type": "string", "required": true, "location": "path"}, "profileId": {"type": "string", "required": true, "location": "path"}, "webPropertyId": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "Experiment"}, "response": {"$ref": "Experiment"}, "scopes": ["https://www.googleapis.com/auth/analytics"]}, "list": {"id": "analytics.management.experiments.list", "path": "management/accounts/{accountId}/webproperties/{webPropertyId}/profiles/{profileId}/experiments", "httpMethod": "GET", "parameters": {"accountId": {"type": "string", "required": true, "location": "path"}, "max-results": {"type": "integer", "format": "int32", "location": "query"}, "profileId": {"type": "string", "required": true, "location": "path"}, "start-index": {"type": "integer", "format": "int32", "minimum": "1", "location": "query"}, "webPropertyId": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "Experiments"}, "scopes": ["https://www.googleapis.com/auth/analytics", "https://www.googleapis.com/auth/analytics.readonly"]}, "patch": {"id": "analytics.management.experiments.patch", "path": "management/accounts/{accountId}/webproperties/{webPropertyId}/profiles/{profileId}/experiments/{experimentId}", "httpMethod": "PATCH", "parameters": {"accountId": {"type": "string", "required": true, "location": "path"}, "experimentId": {"type": "string", "required": true, "location": "path"}, "profileId": {"type": "string", "required": true, "location": "path"}, "webPropertyId": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "Experiment"}, "response": {"$ref": "Experiment"}, "scopes": ["https://www.googleapis.com/auth/analytics"]}, "update": {"id": "analytics.management.experiments.update", "path": "management/accounts/{accountId}/webproperties/{webPropertyId}/profiles/{profileId}/experiments/{experimentId}", "httpMethod": "PUT", "parameters": {"accountId": {"type": "string", "required": true, "location": "path"}, "experimentId": {"type": "string", "required": true, "location": "path"}, "profileId": {"type": "string", "required": true, "location": "path"}, "webPropertyId": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "Experiment"}, "response": {"$ref": "Experiment"}, "scopes": ["https://www.googleapis.com/auth/analytics"]}}}', true));
        $this->management_goals = new ManagementGoalsServiceResource($this, $this->serviceName, 'goals', json_decode('{"methods": {"list": {"id": "analytics.management.goals.list", "path": "management/accounts/{accountId}/webproperties/{webPropertyId}/profiles/{profileId}/goals", "httpMethod": "GET", "parameters": {"accountId": {"type": "string", "required": true, "location": "path"}, "max-results": {"type": "integer", "format": "int32", "location": "query"}, "profileId": {"type": "string", "required": true, "location": "path"}, "start-index": {"type": "integer", "format": "int32", "minimum": "1", "location": "query"}, "webPropertyId": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "Goals"}, "scopes": ["https://www.googleapis.com/auth/analytics", "https://www.googleapis.com/auth/analytics.readonly"]}}}', true));
        $this->management_profiles = new ManagementProfilesServiceResource($this, $this->serviceName, 'profiles', json_decode('{"methods": {"list": {"id": "analytics.management.profiles.list", "path": "management/accounts/{accountId}/webproperties/{webPropertyId}/profiles", "httpMethod": "GET", "parameters": {"accountId": {"type": "string", "required": true, "location": "path"}, "max-results": {"type": "integer", "format": "int32", "location": "query"}, "start-index": {"type": "integer", "format": "int32", "minimum": "1", "location": "query"}, "webPropertyId": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "Profiles"}, "scopes": ["https://www.googleapis.com/auth/analytics", "https://www.googleapis.com/auth/analytics.readonly"]}}}', true));
        $this->management_segments = new ManagementSegmentsServiceResource($this, $this->serviceName, 'segments', json_decode('{"methods": {"list": {"id": "analytics.management.segments.list", "path": "management/segments", "httpMethod": "GET", "parameters": {"max-results": {"type": "integer", "format": "int32", "location": "query"}, "start-index": {"type": "integer", "format": "int32", "minimum": "1", "location": "query"}}, "response": {"$ref": "Segments"}, "scopes": ["https://www.googleapis.com/auth/analytics", "https://www.googleapis.com/auth/analytics.readonly"]}}}', true));
        $this->management_webproperties = new ManagementWebpropertiesServiceResource($this, $this->serviceName, 'webproperties', json_decode('{"methods": {"list": {"id": "analytics.management.webproperties.list", "path": "management/accounts/{accountId}/webproperties", "httpMethod": "GET", "parameters": {"accountId": {"type": "string", "required": true, "location": "path"}, "max-results": {"type": "integer", "format": "int32", "location": "query"}, "start-index": {"type": "integer", "format": "int32", "minimum": "1", "location": "query"}}, "response": {"$ref": "Webproperties"}, "scopes": ["https://www.googleapis.com/auth/analytics", "https://www.googleapis.com/auth/analytics.readonly"]}}}', true));

    }
}



class Account extends GoogleModel {
    protected $__childLinkType = 'AccountChildLink';
    protected $__childLinkDataType = '';
    public $childLink;
    public $created;
    public $id;
    public $kind;
    public $name;
    public $selfLink;
    public $updated;
    public function setChildLink(AccountChildLink $childLink) {
        $this->childLink = $childLink;
    }
    public function getChildLink() {
        return $this->childLink;
    }
    public function setCreated( $created) {
        $this->created = $created;
    }
    public function getCreated() {
        return $this->created;
    }
    public function setId( $id) {
        $this->id = $id;
    }
    public function getId() {
        return $this->id;
    }
    public function setKind( $kind) {
        $this->kind = $kind;
    }
    public function getKind() {
        return $this->kind;
    }
    public function setName( $name) {
        $this->name = $name;
    }
    public function getName() {
        return $this->name;
    }
    public function setSelfLink( $selfLink) {
        $this->selfLink = $selfLink;
    }
    public function getSelfLink() {
        return $this->selfLink;
    }
    public function setUpdated( $updated) {
        $this->updated = $updated;
    }
    public function getUpdated() {
        return $this->updated;
    }
}

class AccountChildLink extends GoogleModel {
    public $href;
    public $type;
    public function setHref( $href) {
        $this->href = $href;
    }
    public function getHref() {
        return $this->href;
    }
    public function setType( $type) {
        $this->type = $type;
    }
    public function getType() {
        return $this->type;
    }
}

class Accounts extends GoogleModel {
    protected $__itemsType = 'Account';
    protected $__itemsDataType = 'array';
    public $items;
    public $itemsPerPage;
    public $kind;
    public $nextLink;
    public $previousLink;
    public $startIndex;
    public $totalResults;
    public $username;
    public function setItems(/* array(Account) */ $items) {
        $this->assertIsArray($items, 'Account', __METHOD__);
        $this->items = $items;
    }
    public function getItems() {
        return $this->items;
    }
    public function setItemsPerPage( $itemsPerPage) {
        $this->itemsPerPage = $itemsPerPage;
    }
    public function getItemsPerPage() {
        return $this->itemsPerPage;
    }
    public function setKind( $kind) {
        $this->kind = $kind;
    }
    public function getKind() {
        return $this->kind;
    }
    public function setNextLink( $nextLink) {
        $this->nextLink = $nextLink;
    }
    public function getNextLink() {
        return $this->nextLink;
    }
    public function setPreviousLink( $previousLink) {
        $this->previousLink = $previousLink;
    }
    public function getPreviousLink() {
        return $this->previousLink;
    }
    public function setStartIndex( $startIndex) {
        $this->startIndex = $startIndex;
    }
    public function getStartIndex() {
        return $this->startIndex;
    }
    public function setTotalResults( $totalResults) {
        $this->totalResults = $totalResults;
    }
    public function getTotalResults() {
        return $this->totalResults;
    }
    public function setUsername( $username) {
        $this->username = $username;
    }
    public function getUsername() {
        return $this->username;
    }
}

class CustomDataSource extends GoogleModel {
    public $accountId;
    protected $__childLinkType = 'CustomDataSourceChildLink';
    protected $__childLinkDataType = '';
    public $childLink;
    public $created;
    public $description;
    public $id;
    public $kind;
    public $name;
    protected $__parentLinkType = 'CustomDataSourceParentLink';
    protected $__parentLinkDataType = '';
    public $parentLink;
    public $profilesLinked;
    public $selfLink;
    public $type;
    public $updated;
    public $webPropertyId;
    public function setAccountId( $accountId) {
        $this->accountId = $accountId;
    }
    public function getAccountId() {
        return $this->accountId;
    }
    public function setChildLink(CustomDataSourceChildLink $childLink) {
        $this->childLink = $childLink;
    }
    public function getChildLink() {
        return $this->childLink;
    }
    public function setCreated( $created) {
        $this->created = $created;
    }
    public function getCreated() {
        return $this->created;
    }
    public function setDescription( $description) {
        $this->description = $description;
    }
    public function getDescription() {
        return $this->description;
    }
    public function setId( $id) {
        $this->id = $id;
    }
    public function getId() {
        return $this->id;
    }
    public function setKind( $kind) {
        $this->kind = $kind;
    }
    public function getKind() {
        return $this->kind;
    }
    public function setName( $name) {
        $this->name = $name;
    }
    public function getName() {
        return $this->name;
    }
    public function setParentLink(CustomDataSourceParentLink $parentLink) {
        $this->parentLink = $parentLink;
    }
    public function getParentLink() {
        return $this->parentLink;
    }
    public function setProfilesLinked(/* array(string) */ $profilesLinked) {
        $this->assertIsArray($profilesLinked, 'string', __METHOD__);
        $this->profilesLinked = $profilesLinked;
    }
    public function getProfilesLinked() {
        return $this->profilesLinked;
    }
    public function setSelfLink( $selfLink) {
        $this->selfLink = $selfLink;
    }
    public function getSelfLink() {
        return $this->selfLink;
    }
    public function setType( $type) {
        $this->type = $type;
    }
    public function getType() {
        return $this->type;
    }
    public function setUpdated( $updated) {
        $this->updated = $updated;
    }
    public function getUpdated() {
        return $this->updated;
    }
    public function setWebPropertyId( $webPropertyId) {
        $this->webPropertyId = $webPropertyId;
    }
    public function getWebPropertyId() {
        return $this->webPropertyId;
    }
}

class CustomDataSourceChildLink extends GoogleModel {
    public $href;
    public $type;
    public function setHref( $href) {
        $this->href = $href;
    }
    public function getHref() {
        return $this->href;
    }
    public function setType( $type) {
        $this->type = $type;
    }
    public function getType() {
        return $this->type;
    }
}

class CustomDataSourceParentLink extends GoogleModel {
    public $href;
    public $type;
    public function setHref( $href) {
        $this->href = $href;
    }
    public function getHref() {
        return $this->href;
    }
    public function setType( $type) {
        $this->type = $type;
    }
    public function getType() {
        return $this->type;
    }
}

class CustomDataSources extends GoogleModel {
    protected $__itemsType = 'CustomDataSource';
    protected $__itemsDataType = 'array';
    public $items;
    public $itemsPerPage;
    public $kind;
    public $nextLink;
    public $previousLink;
    public $startIndex;
    public $totalResults;
    public $username;
    public function setItems(/* array(CustomDataSource) */ $items) {
        $this->assertIsArray($items, 'CustomDataSource', __METHOD__);
        $this->items = $items;
    }
    public function getItems() {
        return $this->items;
    }
    public function setItemsPerPage( $itemsPerPage) {
        $this->itemsPerPage = $itemsPerPage;
    }
    public function getItemsPerPage() {
        return $this->itemsPerPage;
    }
    public function setKind( $kind) {
        $this->kind = $kind;
    }
    public function getKind() {
        return $this->kind;
    }
    public function setNextLink( $nextLink) {
        $this->nextLink = $nextLink;
    }
    public function getNextLink() {
        return $this->nextLink;
    }
    public function setPreviousLink( $previousLink) {
        $this->previousLink = $previousLink;
    }
    public function getPreviousLink() {
        return $this->previousLink;
    }
    public function setStartIndex( $startIndex) {
        $this->startIndex = $startIndex;
    }
    public function getStartIndex() {
        return $this->startIndex;
    }
    public function setTotalResults( $totalResults) {
        $this->totalResults = $totalResults;
    }
    public function getTotalResults() {
        return $this->totalResults;
    }
    public function setUsername( $username) {
        $this->username = $username;
    }
    public function getUsername() {
        return $this->username;
    }
}

class DailyUpload extends GoogleModel {
    public $accountId;
    public $appendCount;
    public $createdTime;
    public $customDataSourceId;
    public $date;
    public $kind;
    public $modifiedTime;
    protected $__parentLinkType = 'DailyUploadParentLink';
    protected $__parentLinkDataType = '';
    public $parentLink;
    protected $__recentChangesType = 'DailyUploadRecentChanges';
    protected $__recentChangesDataType = 'array';
    public $recentChanges;
    public $selfLink;
    public $webPropertyId;
    public function setAccountId( $accountId) {
        $this->accountId = $accountId;
    }
    public function getAccountId() {
        return $this->accountId;
    }
    public function setAppendCount( $appendCount) {
        $this->appendCount = $appendCount;
    }
    public function getAppendCount() {
        return $this->appendCount;
    }
    public function setCreatedTime( $createdTime) {
        $this->createdTime = $createdTime;
    }
    public function getCreatedTime() {
        return $this->createdTime;
    }
    public function setCustomDataSourceId( $customDataSourceId) {
        $this->customDataSourceId = $customDataSourceId;
    }
    public function getCustomDataSourceId() {
        return $this->customDataSourceId;
    }
    public function setDate( $date) {
        $this->date = $date;
    }
    public function getDate() {
        return $this->date;
    }
    public function setKind( $kind) {
        $this->kind = $kind;
    }
    public function getKind() {
        return $this->kind;
    }
    public function setModifiedTime( $modifiedTime) {
        $this->modifiedTime = $modifiedTime;
    }
    public function getModifiedTime() {
        return $this->modifiedTime;
    }
    public function setParentLink(DailyUploadParentLink $parentLink) {
        $this->parentLink = $parentLink;
    }
    public function getParentLink() {
        return $this->parentLink;
    }
    public function setRecentChanges(/* array(DailyUploadRecentChanges) */ $recentChanges) {
        $this->assertIsArray($recentChanges, 'DailyUploadRecentChanges', __METHOD__);
        $this->recentChanges = $recentChanges;
    }
    public function getRecentChanges() {
        return $this->recentChanges;
    }
    public function setSelfLink( $selfLink) {
        $this->selfLink = $selfLink;
    }
    public function getSelfLink() {
        return $this->selfLink;
    }
    public function setWebPropertyId( $webPropertyId) {
        $this->webPropertyId = $webPropertyId;
    }
    public function getWebPropertyId() {
        return $this->webPropertyId;
    }
}

class DailyUploadAppend extends GoogleModel {
    public $accountId;
    public $appendNumber;
    public $customDataSourceId;
    public $date;
    public $kind;
    public $nextAppendLink;
    public $webPropertyId;
    public function setAccountId( $accountId) {
        $this->accountId = $accountId;
    }
    public function getAccountId() {
        return $this->accountId;
    }
    public function setAppendNumber( $appendNumber) {
        $this->appendNumber = $appendNumber;
    }
    public function getAppendNumber() {
        return $this->appendNumber;
    }
    public function setCustomDataSourceId( $customDataSourceId) {
        $this->customDataSourceId = $customDataSourceId;
    }
    public function getCustomDataSourceId() {
        return $this->customDataSourceId;
    }
    public function setDate( $date) {
        $this->date = $date;
    }
    public function getDate() {
        return $this->date;
    }
    public function setKind( $kind) {
        $this->kind = $kind;
    }
    public function getKind() {
        return $this->kind;
    }
    public function setNextAppendLink( $nextAppendLink) {
        $this->nextAppendLink = $nextAppendLink;
    }
    public function getNextAppendLink() {
        return $this->nextAppendLink;
    }
    public function setWebPropertyId( $webPropertyId) {
        $this->webPropertyId = $webPropertyId;
    }
    public function getWebPropertyId() {
        return $this->webPropertyId;
    }
}

class DailyUploadParentLink extends GoogleModel {
    public $href;
    public $type;
    public function setHref( $href) {
        $this->href = $href;
    }
    public function getHref() {
        return $this->href;
    }
    public function setType( $type) {
        $this->type = $type;
    }
    public function getType() {
        return $this->type;
    }
}

class DailyUploadRecentChanges extends GoogleModel {
    public $change;
    public $time;
    public function setChange( $change) {
        $this->change = $change;
    }
    public function getChange() {
        return $this->change;
    }
    public function setTime( $time) {
        $this->time = $time;
    }
    public function getTime() {
        return $this->time;
    }
}

class DailyUploads extends GoogleModel {
    protected $__itemsType = 'DailyUpload';
    protected $__itemsDataType = 'array';
    public $items;
    public $itemsPerPage;
    public $kind;
    public $nextLink;
    public $previousLink;
    public $startIndex;
    public $totalResults;
    public $username;
    public function setItems(/* array(DailyUpload) */ $items) {
        $this->assertIsArray($items, 'DailyUpload', __METHOD__);
        $this->items = $items;
    }
    public function getItems() {
        return $this->items;
    }
    public function setItemsPerPage( $itemsPerPage) {
        $this->itemsPerPage = $itemsPerPage;
    }
    public function getItemsPerPage() {
        return $this->itemsPerPage;
    }
    public function setKind( $kind) {
        $this->kind = $kind;
    }
    public function getKind() {
        return $this->kind;
    }
    public function setNextLink( $nextLink) {
        $this->nextLink = $nextLink;
    }
    public function getNextLink() {
        return $this->nextLink;
    }
    public function setPreviousLink( $previousLink) {
        $this->previousLink = $previousLink;
    }
    public function getPreviousLink() {
        return $this->previousLink;
    }
    public function setStartIndex( $startIndex) {
        $this->startIndex = $startIndex;
    }
    public function getStartIndex() {
        return $this->startIndex;
    }
    public function setTotalResults( $totalResults) {
        $this->totalResults = $totalResults;
    }
    public function getTotalResults() {
        return $this->totalResults;
    }
    public function setUsername( $username) {
        $this->username = $username;
    }
    public function getUsername() {
        return $this->username;
    }
}

class Experiment extends GoogleModel {
    public $accountId;
    public $created;
    public $description;
    public $editableInGaUi;
    public $endTime;
    public $id;
    public $internalWebPropertyId;
    public $kind;
    public $minimumExperimentLengthInDays;
    public $name;
    public $objectiveMetric;
    public $optimizationType;
    protected $__parentLinkType = 'ExperimentParentLink';
    protected $__parentLinkDataType = '';
    public $parentLink;
    public $profileId;
    public $reasonExperimentEnded;
    public $rewriteVariationUrlsAsOriginal;
    public $selfLink;
    public $servingFramework;
    public $snippet;
    public $startTime;
    public $status;
    public $trafficCoverage;
    public $updated;
    protected $__variationsType = 'ExperimentVariations';
    protected $__variationsDataType = 'array';
    public $variations;
    public $webPropertyId;
    public $winnerConfidenceLevel;
    public $winnerFound;
    public function setAccountId( $accountId) {
        $this->accountId = $accountId;
    }
    public function getAccountId() {
        return $this->accountId;
    }
    public function setCreated( $created) {
        $this->created = $created;
    }
    public function getCreated() {
        return $this->created;
    }
    public function setDescription( $description) {
        $this->description = $description;
    }
    public function getDescription() {
        return $this->description;
    }
    public function setEditableInGaUi( $editableInGaUi) {
        $this->editableInGaUi = $editableInGaUi;
    }
    public function getEditableInGaUi() {
        return $this->editableInGaUi;
    }
    public function setEndTime( $endTime) {
        $this->endTime = $endTime;
    }
    public function getEndTime() {
        return $this->endTime;
    }
    public function setId( $id) {
        $this->id = $id;
    }
    public function getId() {
        return $this->id;
    }
    public function setInternalWebPropertyId( $internalWebPropertyId) {
        $this->internalWebPropertyId = $internalWebPropertyId;
    }
    public function getInternalWebPropertyId() {
        return $this->internalWebPropertyId;
    }
    public function setKind( $kind) {
        $this->kind = $kind;
    }
    public function getKind() {
        return $this->kind;
    }
    public function setMinimumExperimentLengthInDays( $minimumExperimentLengthInDays) {
        $this->minimumExperimentLengthInDays = $minimumExperimentLengthInDays;
    }
    public function getMinimumExperimentLengthInDays() {
        return $this->minimumExperimentLengthInDays;
    }
    public function setName( $name) {
        $this->name = $name;
    }
    public function getName() {
        return $this->name;
    }
    public function setObjectiveMetric( $objectiveMetric) {
        $this->objectiveMetric = $objectiveMetric;
    }
    public function getObjectiveMetric() {
        return $this->objectiveMetric;
    }
    public function setOptimizationType( $optimizationType) {
        $this->optimizationType = $optimizationType;
    }
    public function getOptimizationType() {
        return $this->optimizationType;
    }
    public function setParentLink(ExperimentParentLink $parentLink) {
        $this->parentLink = $parentLink;
    }
    public function getParentLink() {
        return $this->parentLink;
    }
    public function setProfileId( $profileId) {
        $this->profileId = $profileId;
    }
    public function getProfileId() {
        return $this->profileId;
    }
    public function setReasonExperimentEnded( $reasonExperimentEnded) {
        $this->reasonExperimentEnded = $reasonExperimentEnded;
    }
    public function getReasonExperimentEnded() {
        return $this->reasonExperimentEnded;
    }
    public function setRewriteVariationUrlsAsOriginal( $rewriteVariationUrlsAsOriginal) {
        $this->rewriteVariationUrlsAsOriginal = $rewriteVariationUrlsAsOriginal;
    }
    public function getRewriteVariationUrlsAsOriginal() {
        return $this->rewriteVariationUrlsAsOriginal;
    }
    public function setSelfLink( $selfLink) {
        $this->selfLink = $selfLink;
    }
    public function getSelfLink() {
        return $this->selfLink;
    }
    public function setServingFramework( $servingFramework) {
        $this->servingFramework = $servingFramework;
    }
    public function getServingFramework() {
        return $this->servingFramework;
    }
    public function setSnippet( $snippet) {
        $this->snippet = $snippet;
    }
    public function getSnippet() {
        return $this->snippet;
    }
    public function setStartTime( $startTime) {
        $this->startTime = $startTime;
    }
    public function getStartTime() {
        return $this->startTime;
    }
    public function setStatus( $status) {
        $this->status = $status;
    }
    public function getStatus() {
        return $this->status;
    }
    public function setTrafficCoverage( $trafficCoverage) {
        $this->trafficCoverage = $trafficCoverage;
    }
    public function getTrafficCoverage() {
        return $this->trafficCoverage;
    }
    public function setUpdated( $updated) {
        $this->updated = $updated;
    }
    public function getUpdated() {
        return $this->updated;
    }
    public function setVariations(/* array(ExperimentVariations) */ $variations) {
        $this->assertIsArray($variations, 'ExperimentVariations', __METHOD__);
        $this->variations = $variations;
    }
    public function getVariations() {
        return $this->variations;
    }
    public function setWebPropertyId( $webPropertyId) {
        $this->webPropertyId = $webPropertyId;
    }
    public function getWebPropertyId() {
        return $this->webPropertyId;
    }
    public function setWinnerConfidenceLevel( $winnerConfidenceLevel) {
        $this->winnerConfidenceLevel = $winnerConfidenceLevel;
    }
    public function getWinnerConfidenceLevel() {
        return $this->winnerConfidenceLevel;
    }
    public function setWinnerFound( $winnerFound) {
        $this->winnerFound = $winnerFound;
    }
    public function getWinnerFound() {
        return $this->winnerFound;
    }
}

class ExperimentParentLink extends GoogleModel {
    public $href;
    public $type;
    public function setHref( $href) {
        $this->href = $href;
    }
    public function getHref() {
        return $this->href;
    }
    public function setType( $type) {
        $this->type = $type;
    }
    public function getType() {
        return $this->type;
    }
}

class ExperimentVariations extends GoogleModel {
    public $name;
    public $status;
    public $url;
    public $weight;
    public $won;
    public function setName( $name) {
        $this->name = $name;
    }
    public function getName() {
        return $this->name;
    }
    public function setStatus( $status) {
        $this->status = $status;
    }
    public function getStatus() {
        return $this->status;
    }
    public function setUrl( $url) {
        $this->url = $url;
    }
    public function getUrl() {
        return $this->url;
    }
    public function setWeight( $weight) {
        $this->weight = $weight;
    }
    public function getWeight() {
        return $this->weight;
    }
    public function setWon( $won) {
        $this->won = $won;
    }
    public function getWon() {
        return $this->won;
    }
}

class Experiments extends GoogleModel {
    protected $__itemsType = 'Experiment';
    protected $__itemsDataType = 'array';
    public $items;
    public $itemsPerPage;
    public $kind;
    public $nextLink;
    public $previousLink;
    public $startIndex;
    public $totalResults;
    public $username;
    public function setItems(/* array(Experiment) */ $items) {
        $this->assertIsArray($items, 'Experiment', __METHOD__);
        $this->items = $items;
    }
    public function getItems() {
        return $this->items;
    }
    public function setItemsPerPage( $itemsPerPage) {
        $this->itemsPerPage = $itemsPerPage;
    }
    public function getItemsPerPage() {
        return $this->itemsPerPage;
    }
    public function setKind( $kind) {
        $this->kind = $kind;
    }
    public function getKind() {
        return $this->kind;
    }
    public function setNextLink( $nextLink) {
        $this->nextLink = $nextLink;
    }
    public function getNextLink() {
        return $this->nextLink;
    }
    public function setPreviousLink( $previousLink) {
        $this->previousLink = $previousLink;
    }
    public function getPreviousLink() {
        return $this->previousLink;
    }
    public function setStartIndex( $startIndex) {
        $this->startIndex = $startIndex;
    }
    public function getStartIndex() {
        return $this->startIndex;
    }
    public function setTotalResults( $totalResults) {
        $this->totalResults = $totalResults;
    }
    public function getTotalResults() {
        return $this->totalResults;
    }
    public function setUsername( $username) {
        $this->username = $username;
    }
    public function getUsername() {
        return $this->username;
    }
}

class GaData extends GoogleModel {
    protected $__columnHeadersType = 'GaDataColumnHeaders';
    protected $__columnHeadersDataType = 'array';
    public $columnHeaders;
    public $containsSampledData;
    public $id;
    public $itemsPerPage;
    public $kind;
    public $nextLink;
    public $previousLink;
    protected $__profileInfoType = 'GaDataProfileInfo';
    protected $__profileInfoDataType = '';
    public $profileInfo;
    protected $__queryType = 'GaDataQuery';
    protected $__queryDataType = '';
    public $query;
    public $rows;
    public $selfLink;
    public $totalResults;
    public $totalsForAllResults;
    public function setColumnHeaders(/* array(GaDataColumnHeaders) */ $columnHeaders) {
        $this->assertIsArray($columnHeaders, 'GaDataColumnHeaders', __METHOD__);
        $this->columnHeaders = $columnHeaders;
    }
    public function getColumnHeaders() {
        return $this->columnHeaders;
    }
    public function setContainsSampledData( $containsSampledData) {
        $this->containsSampledData = $containsSampledData;
    }
    public function getContainsSampledData() {
        return $this->containsSampledData;
    }
    public function setId( $id) {
        $this->id = $id;
    }
    public function getId() {
        return $this->id;
    }
    public function setItemsPerPage( $itemsPerPage) {
        $this->itemsPerPage = $itemsPerPage;
    }
    public function getItemsPerPage() {
        return $this->itemsPerPage;
    }
    public function setKind( $kind) {
        $this->kind = $kind;
    }
    public function getKind() {
        return $this->kind;
    }
    public function setNextLink( $nextLink) {
        $this->nextLink = $nextLink;
    }
    public function getNextLink() {
        return $this->nextLink;
    }
    public function setPreviousLink( $previousLink) {
        $this->previousLink = $previousLink;
    }
    public function getPreviousLink() {
        return $this->previousLink;
    }
    public function setProfileInfo(GaDataProfileInfo $profileInfo) {
        $this->profileInfo = $profileInfo;
    }
    public function getProfileInfo() {
        return $this->profileInfo;
    }
    public function setQuery(GaDataQuery $query) {
        $this->query = $query;
    }
    public function getQuery() {
        return $this->query;
    }
    public function setRows(/* array(string) */ $rows) {
        $this->assertIsArray($rows, 'string', __METHOD__);
        $this->rows = $rows;
    }
    public function getRows() {
        return $this->rows;
    }
    public function setSelfLink( $selfLink) {
        $this->selfLink = $selfLink;
    }
    public function getSelfLink() {
        return $this->selfLink;
    }
    public function setTotalResults( $totalResults) {
        $this->totalResults = $totalResults;
    }
    public function getTotalResults() {
        return $this->totalResults;
    }
    public function setTotalsForAllResults( $totalsForAllResults) {
        $this->totalsForAllResults = $totalsForAllResults;
    }
    public function getTotalsForAllResults() {
        return $this->totalsForAllResults;
    }
}

class GaDataColumnHeaders extends GoogleModel {
    public $columnType;
    public $dataType;
    public $name;
    public function setColumnType( $columnType) {
        $this->columnType = $columnType;
    }
    public function getColumnType() {
        return $this->columnType;
    }
    public function setDataType( $dataType) {
        $this->dataType = $dataType;
    }
    public function getDataType() {
        return $this->dataType;
    }
    public function setName( $name) {
        $this->name = $name;
    }
    public function getName() {
        return $this->name;
    }
}

class GaDataProfileInfo extends GoogleModel {
    public $accountId;
    public $internalWebPropertyId;
    public $profileId;
    public $profileName;
    public $tableId;
    public $webPropertyId;
    public function setAccountId( $accountId) {
        $this->accountId = $accountId;
    }
    public function getAccountId() {
        return $this->accountId;
    }
    public function setInternalWebPropertyId( $internalWebPropertyId) {
        $this->internalWebPropertyId = $internalWebPropertyId;
    }
    public function getInternalWebPropertyId() {
        return $this->internalWebPropertyId;
    }
    public function setProfileId( $profileId) {
        $this->profileId = $profileId;
    }
    public function getProfileId() {
        return $this->profileId;
    }
    public function setProfileName( $profileName) {
        $this->profileName = $profileName;
    }
    public function getProfileName() {
        return $this->profileName;
    }
    public function setTableId( $tableId) {
        $this->tableId = $tableId;
    }
    public function getTableId() {
        return $this->tableId;
    }
    public function setWebPropertyId( $webPropertyId) {
        $this->webPropertyId = $webPropertyId;
    }
    public function getWebPropertyId() {
        return $this->webPropertyId;
    }
}

class GaDataQuery extends GoogleModel {
    public $dimensions;
    public $end_date;
    public $filters;
    public $ids;
    public $max_results;
    public $metrics;
    public $segment;
    public $sort;
    public $start_date;
    public $start_index;
    public function setDimensions( $dimensions) {
        $this->dimensions = $dimensions;
    }
    public function getDimensions() {
        return $this->dimensions;
    }
    public function setEnd_date( $end_date) {
        $this->end_date = $end_date;
    }
    public function getEnd_date() {
        return $this->end_date;
    }
    public function setFilters( $filters) {
        $this->filters = $filters;
    }
    public function getFilters() {
        return $this->filters;
    }
    public function setIds( $ids) {
        $this->ids = $ids;
    }
    public function getIds() {
        return $this->ids;
    }
    public function setMax_results( $max_results) {
        $this->max_results = $max_results;
    }
    public function getMax_results() {
        return $this->max_results;
    }
    public function setMetrics(/* array(string) */ $metrics) {
        $this->assertIsArray($metrics, 'string', __METHOD__);
        $this->metrics = $metrics;
    }
    public function getMetrics() {
        return $this->metrics;
    }
    public function setSegment( $segment) {
        $this->segment = $segment;
    }
    public function getSegment() {
        return $this->segment;
    }
    public function setSort(/* array(string) */ $sort) {
        $this->assertIsArray($sort, 'string', __METHOD__);
        $this->sort = $sort;
    }
    public function getSort() {
        return $this->sort;
    }
    public function setStart_date( $start_date) {
        $this->start_date = $start_date;
    }
    public function getStart_date() {
        return $this->start_date;
    }
    public function setStart_index( $start_index) {
        $this->start_index = $start_index;
    }
    public function getStart_index() {
        return $this->start_index;
    }
}

class Goal extends GoogleModel {
    public $accountId;
    public $active;
    public $created;
    protected $__eventDetailsType = 'GoalEventDetails';
    protected $__eventDetailsDataType = '';
    public $eventDetails;
    public $id;
    public $internalWebPropertyId;
    public $kind;
    public $name;
    protected $__parentLinkType = 'GoalParentLink';
    protected $__parentLinkDataType = '';
    public $parentLink;
    public $profileId;
    public $selfLink;
    public $type;
    public $updated;
    protected $__urlDestinationDetailsType = 'GoalUrlDestinationDetails';
    protected $__urlDestinationDetailsDataType = '';
    public $urlDestinationDetails;
    public $value;
    protected $__visitNumPagesDetailsType = 'GoalVisitNumPagesDetails';
    protected $__visitNumPagesDetailsDataType = '';
    public $visitNumPagesDetails;
    protected $__visitTimeOnSiteDetailsType = 'GoalVisitTimeOnSiteDetails';
    protected $__visitTimeOnSiteDetailsDataType = '';
    public $visitTimeOnSiteDetails;
    public $webPropertyId;
    public function setAccountId( $accountId) {
        $this->accountId = $accountId;
    }
    public function getAccountId() {
        return $this->accountId;
    }
    public function setActive( $active) {
        $this->active = $active;
    }
    public function getActive() {
        return $this->active;
    }
    public function setCreated( $created) {
        $this->created = $created;
    }
    public function getCreated() {
        return $this->created;
    }
    public function setEventDetails(GoalEventDetails $eventDetails) {
        $this->eventDetails = $eventDetails;
    }
    public function getEventDetails() {
        return $this->eventDetails;
    }
    public function setId( $id) {
        $this->id = $id;
    }
    public function getId() {
        return $this->id;
    }
    public function setInternalWebPropertyId( $internalWebPropertyId) {
        $this->internalWebPropertyId = $internalWebPropertyId;
    }
    public function getInternalWebPropertyId() {
        return $this->internalWebPropertyId;
    }
    public function setKind( $kind) {
        $this->kind = $kind;
    }
    public function getKind() {
        return $this->kind;
    }
    public function setName( $name) {
        $this->name = $name;
    }
    public function getName() {
        return $this->name;
    }
    public function setParentLink(GoalParentLink $parentLink) {
        $this->parentLink = $parentLink;
    }
    public function getParentLink() {
        return $this->parentLink;
    }
    public function setProfileId( $profileId) {
        $this->profileId = $profileId;
    }
    public function getProfileId() {
        return $this->profileId;
    }
    public function setSelfLink( $selfLink) {
        $this->selfLink = $selfLink;
    }
    public function getSelfLink() {
        return $this->selfLink;
    }
    public function setType( $type) {
        $this->type = $type;
    }
    public function getType() {
        return $this->type;
    }
    public function setUpdated( $updated) {
        $this->updated = $updated;
    }
    public function getUpdated() {
        return $this->updated;
    }
    public function setUrlDestinationDetails(GoalUrlDestinationDetails $urlDestinationDetails) {
        $this->urlDestinationDetails = $urlDestinationDetails;
    }
    public function getUrlDestinationDetails() {
        return $this->urlDestinationDetails;
    }
    public function setValue( $value) {
        $this->value = $value;
    }
    public function getValue() {
        return $this->value;
    }
    public function setVisitNumPagesDetails(GoalVisitNumPagesDetails $visitNumPagesDetails) {
        $this->visitNumPagesDetails = $visitNumPagesDetails;
    }
    public function getVisitNumPagesDetails() {
        return $this->visitNumPagesDetails;
    }
    public function setVisitTimeOnSiteDetails(GoalVisitTimeOnSiteDetails $visitTimeOnSiteDetails) {
        $this->visitTimeOnSiteDetails = $visitTimeOnSiteDetails;
    }
    public function getVisitTimeOnSiteDetails() {
        return $this->visitTimeOnSiteDetails;
    }
    public function setWebPropertyId( $webPropertyId) {
        $this->webPropertyId = $webPropertyId;
    }
    public function getWebPropertyId() {
        return $this->webPropertyId;
    }
}

class GoalEventDetails extends GoogleModel {
    protected $__eventConditionsType = 'GoalEventDetailsEventConditions';
    protected $__eventConditionsDataType = 'array';
    public $eventConditions;
    public $useEventValue;
    public function setEventConditions(/* array(GoalEventDetailsEventConditions) */ $eventConditions) {
        $this->assertIsArray($eventConditions, 'GoalEventDetailsEventConditions', __METHOD__);
        $this->eventConditions = $eventConditions;
    }
    public function getEventConditions() {
        return $this->eventConditions;
    }
    public function setUseEventValue( $useEventValue) {
        $this->useEventValue = $useEventValue;
    }
    public function getUseEventValue() {
        return $this->useEventValue;
    }
}

class GoalEventDetailsEventConditions extends GoogleModel {
    public $comparisonType;
    public $comparisonValue;
    public $expression;
    public $matchType;
    public $type;
    public function setComparisonType( $comparisonType) {
        $this->comparisonType = $comparisonType;
    }
    public function getComparisonType() {
        return $this->comparisonType;
    }
    public function setComparisonValue( $comparisonValue) {
        $this->comparisonValue = $comparisonValue;
    }
    public function getComparisonValue() {
        return $this->comparisonValue;
    }
    public function setExpression( $expression) {
        $this->expression = $expression;
    }
    public function getExpression() {
        return $this->expression;
    }
    public function setMatchType( $matchType) {
        $this->matchType = $matchType;
    }
    public function getMatchType() {
        return $this->matchType;
    }
    public function setType( $type) {
        $this->type = $type;
    }
    public function getType() {
        return $this->type;
    }
}

class GoalParentLink extends GoogleModel {
    public $href;
    public $type;
    public function setHref( $href) {
        $this->href = $href;
    }
    public function getHref() {
        return $this->href;
    }
    public function setType( $type) {
        $this->type = $type;
    }
    public function getType() {
        return $this->type;
    }
}

class GoalUrlDestinationDetails extends GoogleModel {
    public $caseSensitive;
    public $firstStepRequired;
    public $matchType;
    protected $__stepsType = 'GoalUrlDestinationDetailsSteps';
    protected $__stepsDataType = 'array';
    public $steps;
    public $url;
    public function setCaseSensitive( $caseSensitive) {
        $this->caseSensitive = $caseSensitive;
    }
    public function getCaseSensitive() {
        return $this->caseSensitive;
    }
    public function setFirstStepRequired( $firstStepRequired) {
        $this->firstStepRequired = $firstStepRequired;
    }
    public function getFirstStepRequired() {
        return $this->firstStepRequired;
    }
    public function setMatchType( $matchType) {
        $this->matchType = $matchType;
    }
    public function getMatchType() {
        return $this->matchType;
    }
    public function setSteps(/* array(GoalUrlDestinationDetailsSteps) */ $steps) {
        $this->assertIsArray($steps, 'GoalUrlDestinationDetailsSteps', __METHOD__);
        $this->steps = $steps;
    }
    public function getSteps() {
        return $this->steps;
    }
    public function setUrl( $url) {
        $this->url = $url;
    }
    public function getUrl() {
        return $this->url;
    }
}

class GoalUrlDestinationDetailsSteps extends GoogleModel {
    public $name;
    public $number;
    public $url;
    public function setName( $name) {
        $this->name = $name;
    }
    public function getName() {
        return $this->name;
    }
    public function setNumber( $number) {
        $this->number = $number;
    }
    public function getNumber() {
        return $this->number;
    }
    public function setUrl( $url) {
        $this->url = $url;
    }
    public function getUrl() {
        return $this->url;
    }
}

class GoalVisitNumPagesDetails extends GoogleModel {
    public $comparisonType;
    public $comparisonValue;
    public function setComparisonType( $comparisonType) {
        $this->comparisonType = $comparisonType;
    }
    public function getComparisonType() {
        return $this->comparisonType;
    }
    public function setComparisonValue( $comparisonValue) {
        $this->comparisonValue = $comparisonValue;
    }
    public function getComparisonValue() {
        return $this->comparisonValue;
    }
}

class GoalVisitTimeOnSiteDetails extends GoogleModel {
    public $comparisonType;
    public $comparisonValue;
    public function setComparisonType( $comparisonType) {
        $this->comparisonType = $comparisonType;
    }
    public function getComparisonType() {
        return $this->comparisonType;
    }
    public function setComparisonValue( $comparisonValue) {
        $this->comparisonValue = $comparisonValue;
    }
    public function getComparisonValue() {
        return $this->comparisonValue;
    }
}

class Goals extends GoogleModel {
    protected $__itemsType = 'Goal';
    protected $__itemsDataType = 'array';
    public $items;
    public $itemsPerPage;
    public $kind;
    public $nextLink;
    public $previousLink;
    public $startIndex;
    public $totalResults;
    public $username;
    public function setItems(/* array(Goal) */ $items) {
        $this->assertIsArray($items, 'Goal', __METHOD__);
        $this->items = $items;
    }
    public function getItems() {
        return $this->items;
    }
    public function setItemsPerPage( $itemsPerPage) {
        $this->itemsPerPage = $itemsPerPage;
    }
    public function getItemsPerPage() {
        return $this->itemsPerPage;
    }
    public function setKind( $kind) {
        $this->kind = $kind;
    }
    public function getKind() {
        return $this->kind;
    }
    public function setNextLink( $nextLink) {
        $this->nextLink = $nextLink;
    }
    public function getNextLink() {
        return $this->nextLink;
    }
    public function setPreviousLink( $previousLink) {
        $this->previousLink = $previousLink;
    }
    public function getPreviousLink() {
        return $this->previousLink;
    }
    public function setStartIndex( $startIndex) {
        $this->startIndex = $startIndex;
    }
    public function getStartIndex() {
        return $this->startIndex;
    }
    public function setTotalResults( $totalResults) {
        $this->totalResults = $totalResults;
    }
    public function getTotalResults() {
        return $this->totalResults;
    }
    public function setUsername( $username) {
        $this->username = $username;
    }
    public function getUsername() {
        return $this->username;
    }
}

class McfData extends GoogleModel {
    protected $__columnHeadersType = 'McfDataColumnHeaders';
    protected $__columnHeadersDataType = 'array';
    public $columnHeaders;
    public $containsSampledData;
    public $id;
    public $itemsPerPage;
    public $kind;
    public $nextLink;
    public $previousLink;
    protected $__profileInfoType = 'McfDataProfileInfo';
    protected $__profileInfoDataType = '';
    public $profileInfo;
    protected $__queryType = 'McfDataQuery';
    protected $__queryDataType = '';
    public $query;
    protected $__rowsType = 'McfDataRows';
    protected $__rowsDataType = 'array';
    public $rows;
    public $selfLink;
    public $totalResults;
    public $totalsForAllResults;
    public function setColumnHeaders(/* array(McfDataColumnHeaders) */ $columnHeaders) {
        $this->assertIsArray($columnHeaders, 'McfDataColumnHeaders', __METHOD__);
        $this->columnHeaders = $columnHeaders;
    }
    public function getColumnHeaders() {
        return $this->columnHeaders;
    }
    public function setContainsSampledData( $containsSampledData) {
        $this->containsSampledData = $containsSampledData;
    }
    public function getContainsSampledData() {
        return $this->containsSampledData;
    }
    public function setId( $id) {
        $this->id = $id;
    }
    public function getId() {
        return $this->id;
    }
    public function setItemsPerPage( $itemsPerPage) {
        $this->itemsPerPage = $itemsPerPage;
    }
    public function getItemsPerPage() {
        return $this->itemsPerPage;
    }
    public function setKind( $kind) {
        $this->kind = $kind;
    }
    public function getKind() {
        return $this->kind;
    }
    public function setNextLink( $nextLink) {
        $this->nextLink = $nextLink;
    }
    public function getNextLink() {
        return $this->nextLink;
    }
    public function setPreviousLink( $previousLink) {
        $this->previousLink = $previousLink;
    }
    public function getPreviousLink() {
        return $this->previousLink;
    }
    public function setProfileInfo(McfDataProfileInfo $profileInfo) {
        $this->profileInfo = $profileInfo;
    }
    public function getProfileInfo() {
        return $this->profileInfo;
    }
    public function setQuery(McfDataQuery $query) {
        $this->query = $query;
    }
    public function getQuery() {
        return $this->query;
    }
    public function setRows(/* array(McfDataRows) */ $rows) {
        $this->assertIsArray($rows, 'McfDataRows', __METHOD__);
        $this->rows = $rows;
    }
    public function getRows() {
        return $this->rows;
    }
    public function setSelfLink( $selfLink) {
        $this->selfLink = $selfLink;
    }
    public function getSelfLink() {
        return $this->selfLink;
    }
    public function setTotalResults( $totalResults) {
        $this->totalResults = $totalResults;
    }
    public function getTotalResults() {
        return $this->totalResults;
    }
    public function setTotalsForAllResults( $totalsForAllResults) {
        $this->totalsForAllResults = $totalsForAllResults;
    }
    public function getTotalsForAllResults() {
        return $this->totalsForAllResults;
    }
}

class McfDataColumnHeaders extends GoogleModel {
    public $columnType;
    public $dataType;
    public $name;
    public function setColumnType( $columnType) {
        $this->columnType = $columnType;
    }
    public function getColumnType() {
        return $this->columnType;
    }
    public function setDataType( $dataType) {
        $this->dataType = $dataType;
    }
    public function getDataType() {
        return $this->dataType;
    }
    public function setName( $name) {
        $this->name = $name;
    }
    public function getName() {
        return $this->name;
    }
}

class McfDataProfileInfo extends GoogleModel {
    public $accountId;
    public $internalWebPropertyId;
    public $profileId;
    public $profileName;
    public $tableId;
    public $webPropertyId;
    public function setAccountId( $accountId) {
        $this->accountId = $accountId;
    }
    public function getAccountId() {
        return $this->accountId;
    }
    public function setInternalWebPropertyId( $internalWebPropertyId) {
        $this->internalWebPropertyId = $internalWebPropertyId;
    }
    public function getInternalWebPropertyId() {
        return $this->internalWebPropertyId;
    }
    public function setProfileId( $profileId) {
        $this->profileId = $profileId;
    }
    public function getProfileId() {
        return $this->profileId;
    }
    public function setProfileName( $profileName) {
        $this->profileName = $profileName;
    }
    public function getProfileName() {
        return $this->profileName;
    }
    public function setTableId( $tableId) {
        $this->tableId = $tableId;
    }
    public function getTableId() {
        return $this->tableId;
    }
    public function setWebPropertyId( $webPropertyId) {
        $this->webPropertyId = $webPropertyId;
    }
    public function getWebPropertyId() {
        return $this->webPropertyId;
    }
}

class McfDataQuery extends GoogleModel {
    public $dimensions;
    public $end_date;
    public $filters;
    public $ids;
    public $max_results;
    public $metrics;
    public $segment;
    public $sort;
    public $start_date;
    public $start_index;
    public function setDimensions( $dimensions) {
        $this->dimensions = $dimensions;
    }
    public function getDimensions() {
        return $this->dimensions;
    }
    public function setEnd_date( $end_date) {
        $this->end_date = $end_date;
    }
    public function getEnd_date() {
        return $this->end_date;
    }
    public function setFilters( $filters) {
        $this->filters = $filters;
    }
    public function getFilters() {
        return $this->filters;
    }
    public function setIds( $ids) {
        $this->ids = $ids;
    }
    public function getIds() {
        return $this->ids;
    }
    public function setMax_results( $max_results) {
        $this->max_results = $max_results;
    }
    public function getMax_results() {
        return $this->max_results;
    }
    public function setMetrics(/* array(string) */ $metrics) {
        $this->assertIsArray($metrics, 'string', __METHOD__);
        $this->metrics = $metrics;
    }
    public function getMetrics() {
        return $this->metrics;
    }
    public function setSegment( $segment) {
        $this->segment = $segment;
    }
    public function getSegment() {
        return $this->segment;
    }
    public function setSort(/* array(string) */ $sort) {
        $this->assertIsArray($sort, 'string', __METHOD__);
        $this->sort = $sort;
    }
    public function getSort() {
        return $this->sort;
    }
    public function setStart_date( $start_date) {
        $this->start_date = $start_date;
    }
    public function getStart_date() {
        return $this->start_date;
    }
    public function setStart_index( $start_index) {
        $this->start_index = $start_index;
    }
    public function getStart_index() {
        return $this->start_index;
    }
}

class McfDataRows extends GoogleModel {
    protected $__conversionPathValueType = 'McfDataRowsConversionPathValue';
    protected $__conversionPathValueDataType = 'array';
    public $conversionPathValue;
    public $primitiveValue;
    public function setConversionPathValue(/* array(McfDataRowsConversionPathValue) */ $conversionPathValue) {
        $this->assertIsArray($conversionPathValue, 'McfDataRowsConversionPathValue', __METHOD__);
        $this->conversionPathValue = $conversionPathValue;
    }
    public function getConversionPathValue() {
        return $this->conversionPathValue;
    }
    public function setPrimitiveValue( $primitiveValue) {
        $this->primitiveValue = $primitiveValue;
    }
    public function getPrimitiveValue() {
        return $this->primitiveValue;
    }
}

class McfDataRowsConversionPathValue extends GoogleModel {
    public $interactionType;
    public $nodeValue;
    public function setInteractionType( $interactionType) {
        $this->interactionType = $interactionType;
    }
    public function getInteractionType() {
        return $this->interactionType;
    }
    public function setNodeValue( $nodeValue) {
        $this->nodeValue = $nodeValue;
    }
    public function getNodeValue() {
        return $this->nodeValue;
    }
}

class Profile extends GoogleModel {
    public $accountId;
    protected $__childLinkType = 'ProfileChildLink';
    protected $__childLinkDataType = '';
    public $childLink;
    public $created;
    public $currency;
    public $defaultPage;
    public $eCommerceTracking;
    public $excludeQueryParameters;
    public $id;
    public $internalWebPropertyId;
    public $kind;
    public $name;
    protected $__parentLinkType = 'ProfileParentLink';
    protected $__parentLinkDataType = '';
    public $parentLink;
    public $selfLink;
    public $siteSearchCategoryParameters;
    public $siteSearchQueryParameters;
    public $timezone;
    public $type;
    public $updated;
    public $webPropertyId;
    public $websiteUrl;
    public function setAccountId( $accountId) {
        $this->accountId = $accountId;
    }
    public function getAccountId() {
        return $this->accountId;
    }
    public function setChildLink(ProfileChildLink $childLink) {
        $this->childLink = $childLink;
    }
    public function getChildLink() {
        return $this->childLink;
    }
    public function setCreated( $created) {
        $this->created = $created;
    }
    public function getCreated() {
        return $this->created;
    }
    public function setCurrency( $currency) {
        $this->currency = $currency;
    }
    public function getCurrency() {
        return $this->currency;
    }
    public function setDefaultPage( $defaultPage) {
        $this->defaultPage = $defaultPage;
    }
    public function getDefaultPage() {
        return $this->defaultPage;
    }
    public function setECommerceTracking( $eCommerceTracking) {
        $this->eCommerceTracking = $eCommerceTracking;
    }
    public function getECommerceTracking() {
        return $this->eCommerceTracking;
    }
    public function setExcludeQueryParameters( $excludeQueryParameters) {
        $this->excludeQueryParameters = $excludeQueryParameters;
    }
    public function getExcludeQueryParameters() {
        return $this->excludeQueryParameters;
    }
    public function setId( $id) {
        $this->id = $id;
    }
    public function getId() {
        return $this->id;
    }
    public function setInternalWebPropertyId( $internalWebPropertyId) {
        $this->internalWebPropertyId = $internalWebPropertyId;
    }
    public function getInternalWebPropertyId() {
        return $this->internalWebPropertyId;
    }
    public function setKind( $kind) {
        $this->kind = $kind;
    }
    public function getKind() {
        return $this->kind;
    }
    public function setName( $name) {
        $this->name = $name;
    }
    public function getName() {
        return $this->name;
    }
    public function setParentLink(ProfileParentLink $parentLink) {
        $this->parentLink = $parentLink;
    }
    public function getParentLink() {
        return $this->parentLink;
    }
    public function setSelfLink( $selfLink) {
        $this->selfLink = $selfLink;
    }
    public function getSelfLink() {
        return $this->selfLink;
    }
    public function setSiteSearchCategoryParameters( $siteSearchCategoryParameters) {
        $this->siteSearchCategoryParameters = $siteSearchCategoryParameters;
    }
    public function getSiteSearchCategoryParameters() {
        return $this->siteSearchCategoryParameters;
    }
    public function setSiteSearchQueryParameters( $siteSearchQueryParameters) {
        $this->siteSearchQueryParameters = $siteSearchQueryParameters;
    }
    public function getSiteSearchQueryParameters() {
        return $this->siteSearchQueryParameters;
    }
    public function setTimezone( $timezone) {
        $this->timezone = $timezone;
    }
    public function getTimezone() {
        return $this->timezone;
    }
    public function setType( $type) {
        $this->type = $type;
    }
    public function getType() {
        return $this->type;
    }
    public function setUpdated( $updated) {
        $this->updated = $updated;
    }
    public function getUpdated() {
        return $this->updated;
    }
    public function setWebPropertyId( $webPropertyId) {
        $this->webPropertyId = $webPropertyId;
    }
    public function getWebPropertyId() {
        return $this->webPropertyId;
    }
    public function setWebsiteUrl( $websiteUrl) {
        $this->websiteUrl = $websiteUrl;
    }
    public function getWebsiteUrl() {
        return $this->websiteUrl;
    }
}

class ProfileChildLink extends GoogleModel {
    public $href;
    public $type;
    public function setHref( $href) {
        $this->href = $href;
    }
    public function getHref() {
        return $this->href;
    }
    public function setType( $type) {
        $this->type = $type;
    }
    public function getType() {
        return $this->type;
    }
}

class ProfileParentLink extends GoogleModel {
    public $href;
    public $type;
    public function setHref( $href) {
        $this->href = $href;
    }
    public function getHref() {
        return $this->href;
    }
    public function setType( $type) {
        $this->type = $type;
    }
    public function getType() {
        return $this->type;
    }
}

class Profiles extends GoogleModel {
    protected $__itemsType = 'Profile';
    protected $__itemsDataType = 'array';
    public $items;
    public $itemsPerPage;
    public $kind;
    public $nextLink;
    public $previousLink;
    public $startIndex;
    public $totalResults;
    public $username;
    public function setItems(/* array(Profile) */ $items) {
        $this->assertIsArray($items, 'Profile', __METHOD__);
        $this->items = $items;
    }
    public function getItems() {
        return $this->items;
    }
    public function setItemsPerPage( $itemsPerPage) {
        $this->itemsPerPage = $itemsPerPage;
    }
    public function getItemsPerPage() {
        return $this->itemsPerPage;
    }
    public function setKind( $kind) {
        $this->kind = $kind;
    }
    public function getKind() {
        return $this->kind;
    }
    public function setNextLink( $nextLink) {
        $this->nextLink = $nextLink;
    }
    public function getNextLink() {
        return $this->nextLink;
    }
    public function setPreviousLink( $previousLink) {
        $this->previousLink = $previousLink;
    }
    public function getPreviousLink() {
        return $this->previousLink;
    }
    public function setStartIndex( $startIndex) {
        $this->startIndex = $startIndex;
    }
    public function getStartIndex() {
        return $this->startIndex;
    }
    public function setTotalResults( $totalResults) {
        $this->totalResults = $totalResults;
    }
    public function getTotalResults() {
        return $this->totalResults;
    }
    public function setUsername( $username) {
        $this->username = $username;
    }
    public function getUsername() {
        return $this->username;
    }
}

class RealtimeData extends GoogleModel {
    protected $__columnHeadersType = 'RealtimeDataColumnHeaders';
    protected $__columnHeadersDataType = 'array';
    public $columnHeaders;
    public $id;
    public $kind;
    protected $__profileInfoType = 'RealtimeDataProfileInfo';
    protected $__profileInfoDataType = '';
    public $profileInfo;
    protected $__queryType = 'RealtimeDataQuery';
    protected $__queryDataType = '';
    public $query;
    public $rows;
    public $selfLink;
    public $totalResults;
    public $totalsForAllResults;
    public function setColumnHeaders(/* array(RealtimeDataColumnHeaders) */ $columnHeaders) {
        $this->assertIsArray($columnHeaders, 'RealtimeDataColumnHeaders', __METHOD__);
        $this->columnHeaders = $columnHeaders;
    }
    public function getColumnHeaders() {
        return $this->columnHeaders;
    }
    public function setId( $id) {
        $this->id = $id;
    }
    public function getId() {
        return $this->id;
    }
    public function setKind( $kind) {
        $this->kind = $kind;
    }
    public function getKind() {
        return $this->kind;
    }
    public function setProfileInfo(RealtimeDataProfileInfo $profileInfo) {
        $this->profileInfo = $profileInfo;
    }
    public function getProfileInfo() {
        return $this->profileInfo;
    }
    public function setQuery(RealtimeDataQuery $query) {
        $this->query = $query;
    }
    public function getQuery() {
        return $this->query;
    }
    public function setRows(/* array(string) */ $rows) {
        $this->assertIsArray($rows, 'string', __METHOD__);
        $this->rows = $rows;
    }
    public function getRows() {
        return $this->rows;
    }
    public function setSelfLink( $selfLink) {
        $this->selfLink = $selfLink;
    }
    public function getSelfLink() {
        return $this->selfLink;
    }
    public function setTotalResults( $totalResults) {
        $this->totalResults = $totalResults;
    }
    public function getTotalResults() {
        return $this->totalResults;
    }
    public function setTotalsForAllResults( $totalsForAllResults) {
        $this->totalsForAllResults = $totalsForAllResults;
    }
    public function getTotalsForAllResults() {
        return $this->totalsForAllResults;
    }
}

class RealtimeDataColumnHeaders extends GoogleModel {
    public $columnType;
    public $dataType;
    public $name;
    public function setColumnType( $columnType) {
        $this->columnType = $columnType;
    }
    public function getColumnType() {
        return $this->columnType;
    }
    public function setDataType( $dataType) {
        $this->dataType = $dataType;
    }
    public function getDataType() {
        return $this->dataType;
    }
    public function setName( $name) {
        $this->name = $name;
    }
    public function getName() {
        return $this->name;
    }
}

class RealtimeDataProfileInfo extends GoogleModel {
    public $accountId;
    public $internalWebPropertyId;
    public $profileId;
    public $profileName;
    public $tableId;
    public $webPropertyId;
    public function setAccountId( $accountId) {
        $this->accountId = $accountId;
    }
    public function getAccountId() {
        return $this->accountId;
    }
    public function setInternalWebPropertyId( $internalWebPropertyId) {
        $this->internalWebPropertyId = $internalWebPropertyId;
    }
    public function getInternalWebPropertyId() {
        return $this->internalWebPropertyId;
    }
    public function setProfileId( $profileId) {
        $this->profileId = $profileId;
    }
    public function getProfileId() {
        return $this->profileId;
    }
    public function setProfileName( $profileName) {
        $this->profileName = $profileName;
    }
    public function getProfileName() {
        return $this->profileName;
    }
    public function setTableId( $tableId) {
        $this->tableId = $tableId;
    }
    public function getTableId() {
        return $this->tableId;
    }
    public function setWebPropertyId( $webPropertyId) {
        $this->webPropertyId = $webPropertyId;
    }
    public function getWebPropertyId() {
        return $this->webPropertyId;
    }
}

class RealtimeDataQuery extends GoogleModel {
    public $dimensions;
    public $filters;
    public $ids;
    public $max_results;
    public $metrics;
    public $sort;
    public function setDimensions( $dimensions) {
        $this->dimensions = $dimensions;
    }
    public function getDimensions() {
        return $this->dimensions;
    }
    public function setFilters( $filters) {
        $this->filters = $filters;
    }
    public function getFilters() {
        return $this->filters;
    }
    public function setIds( $ids) {
        $this->ids = $ids;
    }
    public function getIds() {
        return $this->ids;
    }
    public function setMax_results( $max_results) {
        $this->max_results = $max_results;
    }
    public function getMax_results() {
        return $this->max_results;
    }
    public function setMetrics(/* array(string) */ $metrics) {
        $this->assertIsArray($metrics, 'string', __METHOD__);
        $this->metrics = $metrics;
    }
    public function getMetrics() {
        return $this->metrics;
    }
    public function setSort(/* array(string) */ $sort) {
        $this->assertIsArray($sort, 'string', __METHOD__);
        $this->sort = $sort;
    }
    public function getSort() {
        return $this->sort;
    }
}

class Segment extends GoogleModel {
    public $created;
    public $definition;
    public $id;
    public $kind;
    public $name;
    public $segmentId;
    public $selfLink;
    public $updated;
    public function setCreated( $created) {
        $this->created = $created;
    }
    public function getCreated() {
        return $this->created;
    }
    public function setDefinition( $definition) {
        $this->definition = $definition;
    }
    public function getDefinition() {
        return $this->definition;
    }
    public function setId( $id) {
        $this->id = $id;
    }
    public function getId() {
        return $this->id;
    }
    public function setKind( $kind) {
        $this->kind = $kind;
    }
    public function getKind() {
        return $this->kind;
    }
    public function setName( $name) {
        $this->name = $name;
    }
    public function getName() {
        return $this->name;
    }
    public function setSegmentId( $segmentId) {
        $this->segmentId = $segmentId;
    }
    public function getSegmentId() {
        return $this->segmentId;
    }
    public function setSelfLink( $selfLink) {
        $this->selfLink = $selfLink;
    }
    public function getSelfLink() {
        return $this->selfLink;
    }
    public function setUpdated( $updated) {
        $this->updated = $updated;
    }
    public function getUpdated() {
        return $this->updated;
    }
}

class Segments extends GoogleModel {
    protected $__itemsType = 'Segment';
    protected $__itemsDataType = 'array';
    public $items;
    public $itemsPerPage;
    public $kind;
    public $nextLink;
    public $previousLink;
    public $startIndex;
    public $totalResults;
    public $username;
    public function setItems(/* array(Segment) */ $items) {
        $this->assertIsArray($items, 'Segment', __METHOD__);
        $this->items = $items;
    }
    public function getItems() {
        return $this->items;
    }
    public function setItemsPerPage( $itemsPerPage) {
        $this->itemsPerPage = $itemsPerPage;
    }
    public function getItemsPerPage() {
        return $this->itemsPerPage;
    }
    public function setKind( $kind) {
        $this->kind = $kind;
    }
    public function getKind() {
        return $this->kind;
    }
    public function setNextLink( $nextLink) {
        $this->nextLink = $nextLink;
    }
    public function getNextLink() {
        return $this->nextLink;
    }
    public function setPreviousLink( $previousLink) {
        $this->previousLink = $previousLink;
    }
    public function getPreviousLink() {
        return $this->previousLink;
    }
    public function setStartIndex( $startIndex) {
        $this->startIndex = $startIndex;
    }
    public function getStartIndex() {
        return $this->startIndex;
    }
    public function setTotalResults( $totalResults) {
        $this->totalResults = $totalResults;
    }
    public function getTotalResults() {
        return $this->totalResults;
    }
    public function setUsername( $username) {
        $this->username = $username;
    }
    public function getUsername() {
        return $this->username;
    }
}

class Webproperties extends GoogleModel {
    protected $__itemsType = 'Webproperty';
    protected $__itemsDataType = 'array';
    public $items;
    public $itemsPerPage;
    public $kind;
    public $nextLink;
    public $previousLink;
    public $startIndex;
    public $totalResults;
    public $username;
    public function setItems(/* array(Webproperty) */ $items) {
        $this->assertIsArray($items, 'Webproperty', __METHOD__);
        $this->items = $items;
    }
    public function getItems() {
        return $this->items;
    }
    public function setItemsPerPage( $itemsPerPage) {
        $this->itemsPerPage = $itemsPerPage;
    }
    public function getItemsPerPage() {
        return $this->itemsPerPage;
    }
    public function setKind( $kind) {
        $this->kind = $kind;
    }
    public function getKind() {
        return $this->kind;
    }
    public function setNextLink( $nextLink) {
        $this->nextLink = $nextLink;
    }
    public function getNextLink() {
        return $this->nextLink;
    }
    public function setPreviousLink( $previousLink) {
        $this->previousLink = $previousLink;
    }
    public function getPreviousLink() {
        return $this->previousLink;
    }
    public function setStartIndex( $startIndex) {
        $this->startIndex = $startIndex;
    }
    public function getStartIndex() {
        return $this->startIndex;
    }
    public function setTotalResults( $totalResults) {
        $this->totalResults = $totalResults;
    }
    public function getTotalResults() {
        return $this->totalResults;
    }
    public function setUsername( $username) {
        $this->username = $username;
    }
    public function getUsername() {
        return $this->username;
    }
}

class Webproperty extends GoogleModel {
    public $accountId;
    protected $__childLinkType = 'WebpropertyChildLink';
    protected $__childLinkDataType = '';
    public $childLink;
    public $created;
    public $id;
    public $industryVertical;
    public $internalWebPropertyId;
    public $kind;
    public $level;
    public $name;
    protected $__parentLinkType = 'WebpropertyParentLink';
    protected $__parentLinkDataType = '';
    public $parentLink;
    public $profileCount;
    public $selfLink;
    public $updated;
    public $websiteUrl;
    public function setAccountId( $accountId) {
        $this->accountId = $accountId;
    }
    public function getAccountId() {
        return $this->accountId;
    }
    public function setChildLink(WebpropertyChildLink $childLink) {
        $this->childLink = $childLink;
    }
    public function getChildLink() {
        return $this->childLink;
    }
    public function setCreated( $created) {
        $this->created = $created;
    }
    public function getCreated() {
        return $this->created;
    }
    public function setId( $id) {
        $this->id = $id;
    }
    public function getId() {
        return $this->id;
    }
    public function setIndustryVertical( $industryVertical) {
        $this->industryVertical = $industryVertical;
    }
    public function getIndustryVertical() {
        return $this->industryVertical;
    }
    public function setInternalWebPropertyId( $internalWebPropertyId) {
        $this->internalWebPropertyId = $internalWebPropertyId;
    }
    public function getInternalWebPropertyId() {
        return $this->internalWebPropertyId;
    }
    public function setKind( $kind) {
        $this->kind = $kind;
    }
    public function getKind() {
        return $this->kind;
    }
    public function setLevel( $level) {
        $this->level = $level;
    }
    public function getLevel() {
        return $this->level;
    }
    public function setName( $name) {
        $this->name = $name;
    }
    public function getName() {
        return $this->name;
    }
    public function setParentLink(WebpropertyParentLink $parentLink) {
        $this->parentLink = $parentLink;
    }
    public function getParentLink() {
        return $this->parentLink;
    }
    public function setProfileCount( $profileCount) {
        $this->profileCount = $profileCount;
    }
    public function getProfileCount() {
        return $this->profileCount;
    }
    public function setSelfLink( $selfLink) {
        $this->selfLink = $selfLink;
    }
    public function getSelfLink() {
        return $this->selfLink;
    }
    public function setUpdated( $updated) {
        $this->updated = $updated;
    }
    public function getUpdated() {
        return $this->updated;
    }
    public function setWebsiteUrl( $websiteUrl) {
        $this->websiteUrl = $websiteUrl;
    }
    public function getWebsiteUrl() {
        return $this->websiteUrl;
    }
}

class WebpropertyChildLink extends GoogleModel {
    public $href;
    public $type;
    public function setHref( $href) {
        $this->href = $href;
    }
    public function getHref() {
        return $this->href;
    }
    public function setType( $type) {
        $this->type = $type;
    }
    public function getType() {
        return $this->type;
    }
}

class WebpropertyParentLink extends GoogleModel {
    public $href;
    public $type;
    public function setHref( $href) {
        $this->href = $href;
    }
    public function getHref() {
        return $this->href;
    }
    public function setType( $type) {
        $this->type = $type;
    }
    public function getType() {
        return $this->type;
    }
}
