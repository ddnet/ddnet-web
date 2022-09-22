var mappers = new Bloodhound({
  datumTokenizer: Bloodhound.tokenizers.obj.whitespace('name'),
  queryTokenizer: Bloodhound.tokenizers.whitespace,
  remote: '/maps/?mapper=%QUERY',
  limit: 10
});

mappers.initialize();

$('#mapperform .typeahead').typeahead(null, {
  name: 'mappers',
  displayKey: 'name',
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
