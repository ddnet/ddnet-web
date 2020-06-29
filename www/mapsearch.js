var maps = new Bloodhound({
  datumTokenizer: Bloodhound.tokenizers.obj.whitespace('name'),
  queryTokenizer: Bloodhound.tokenizers.whitespace,
  remote: '/maps/?query=%QUERY',
  limit: 10
});

maps.initialize();

$('#remote .typeahead').typeahead(null, {
  name: 'maps',
  displayKey: 'name',
  source: maps.ttAdapter(),
  templates: {
    suggestion: function(o) {
      let result = '<p><strong>' + o.name.replace(/&/g, "&amp;").replace(/</g, "&lt;").replace(/>/g, "&gt;") + '</strong>';
      if (o.mapper) {
        result += " by " + o.mapper.replace(/&/g, "&amp;").replace(/</g, "&lt;").replace(/>/g, "&gt;")
      }
      result += '<span class="right">' + o.type + '&nbsp;Server</span></p>'
      return result;
    }
  }
}).on('typeahead:selected', function(e, data) {
  $('#mapform').submit();
});
