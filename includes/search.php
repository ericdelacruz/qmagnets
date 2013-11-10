<div class="search_area">
<script type="text/javascript" src="http://www.google.com/jsapi"></script>
<script type="text/javascript">

  function findByClass(tagName, className) {
    var r = new RegExp('\\b' + className + '\\b');
    var elements = document.getElementsByTagName(tagName);
    for (var i = 0;  i < elements.length;  i++) {
      var e = elements[i];
      if (e.className && r.test(e.className)) {
        return e;
      }
    }
    return null;
  }

  function searchSubmitted() {
    var e;
    if ((e = findByClass('input', 'gsc-input')) != null) {
      if (e.value === '') {
        searchCleared();
      }
    }
  }

  function searchComplete() {
    document.getElementById('cse-results')
      .style.display = 'block';
    document.getElementById('static-content')
      .style.display = 'none';
  }

  function searchCleared() {
    document.getElementById('static-content')
      .style.display = 'block';
    document.getElementById('cse-results')
      .style.display = 'none';
  }

  function init() {

    var cseId = '007575580407303536892:ha3hy56ineg';

    var customSearchControl =
      new google.search.CustomSearchControl(cseId);

    customSearchControl.setResultSetSize(
      google.search.Search.FILTERED_CSE_RESULTSET);

    customSearchControl.setSearchCompleteCallback(
      null, searchComplete);


    var options = new google.search.DrawOptions();
    options.setSearchFormRoot('cse-search-form');

    customSearchControl.draw('cse-results', options);

    var e;

    if ((e = findByClass('form', 'gsc-search-box')) != null) {
      if (e.addEventListener) {
        e.addEventListener(
          'submit', searchSubmitted, false);
      } else if (e.attachEvent) {
        e.attachEvent(
          'onsubmit', searchSubmitted);
      }
    }

    if ((e = findByClass('input', 'gsc-search-button')) != null) {
      if (e.addEventListener) {
        e.addEventListener(
          'click', searchSubmitted, false);
      } else if (e.attachEvent) {
        e.attachEvent(
          'onclick', searchSubmitted);
      }
    }

    if ((e = findByClass('div', 'gsc-clear-button')) != null) {
      if (e.addEventListener) {
          e.addEventListener(
            'click', searchCleared, false);
      } else if (e.attachEvent) {
        e.attachEvent(
          'onclick', searchCleared);
      }
    }
  }

  google.load('search', '1');
  google.setOnLoadCallback(init, true); 

</script>
<div id="cse-search-form">Loading...</div>
<style>
/* Line 1 */
.gs-webResult.gs-result a.gs-title:link
{
  color: #cc9900;
}

/* Line 1 */
.gs-webResult.gs-result a.gs-title:hover
{
  color: #cc9900;
}

.gs-result .gs-title, .gs-result .gs-title *
{
  color: #cc9900;
}

.gs-result .gs-snippet
{
	color:#666
}
</style>

</div>

