var mappers = new Bloodhound({
  datumTokenizer: Bloodhound.tokenizers.obj.whitespace('mapper'),
  queryTokenizer: Bloodhound.tokenizers.whitespace,
  remote: '/maps/?qmapper=%QUERY',
  limit: 10
});

mappers.initialize();

$('#mapperform .typeahead').typeahead(null, {
  name: 'mappers',
  displayKey: 'mapper',
  source: mappers.ttAdapter(),
  templates: {
    suggestion: function(o) {
      let result = '<p><strong>' + o.mapper.replace(/&/g, "&amp;").replace(/</g, "&lt;").replace(/>/g, "&gt;") + '</strong>';
      result += ': ' + o.num_maps + ' maps</p>'
      return result;
    }
  }
}).on('typeahead:selected', function(e, data) {
  $('#mapperform').submit();
});
