@extends('master')

@section('content')
<style>
    .gsc-tabsArea {
      display: none;
    }
</style>

<div class="container" id="secondary" style="min-height: 605px">

    <div id="page-content">
    <div class='post-body entry-content'>
    <div id="cse" style="width: 100%;">

    </div>
    <script src="http://www.google.com/jsapi" type="text/javascript"></script>
    <script type="text/javascript">
    google.load('search', '1', {language : 'en', style : google.loader.themes.V2_DEFAULT});
    google.setOnLoadCallback(function() {
    var customSearchOptions = {};
    var orderByOptions = {};
    orderByOptions['keys'] = [{label: 'Relevance', key: ''},{label: 'Date', key: 'date'}];
    customSearchOptions['enableOrderBy'] = true;
    customSearchOptions['orderByOptions'] = orderByOptions;
    var imageSearchOptions = {};
    imageSearchOptions['layout'] = google.search.ImageSearch.LAYOUT_COLUMN;
    customSearchOptions['enableImageSearch'] = true;
    customSearchOptions['imageSearchOptions'] = imageSearchOptions;
    var googleAnalyticsOptions = {};
    googleAnalyticsOptions['queryParameter'] = 's';
    googleAnalyticsOptions['categoryParameter'] = '';
    customSearchOptions['googleAnalyticsOptions'] = googleAnalyticsOptions; var customSearchControl = new google.search.CustomSearchControl(
    '011595884721815984509:c6apsz44dti', customSearchOptions);
    customSearchControl.setResultSetSize(google.search.Search.FILTERED_CSE_RESULTSET);
    var options = new google.search.DrawOptions();
    options.setAutoComplete(true);
    options.enableSearchResultsOnly();
    customSearchControl.draw('cse', options);
    function parseParamsFromUrl() {
    var params = {};
    var parts = window.location.search.substr(1).split('\x26');
    for (var i = 0; i < parts.length; i++) {
    var keyValuePair = parts[i].split('=');
    var key = decodeURIComponent(keyValuePair[0]);
    params[key] = keyValuePair[1] ?
    decodeURIComponent(keyValuePair[1].replace(/\+/g, ' ')) :
    keyValuePair[1];
    }
    return params;
    }
    var urlParams = parseParamsFromUrl();
    var queryParamName = "s";
    if (urlParams[queryParamName]) {
    customSearchControl.execute(urlParams[queryParamName]);
    }
    }, true);
    </script>
    <div style='clear: both;'></div>
    </div>
</div>
@endsection