var players = new Bloodhound({
  datumTokenizer: Bloodhound.tokenizers.obj.whitespace('name'),
  queryTokenizer: Bloodhound.tokenizers.whitespace,
  remote: '/players/?query=%QUERY',
  limit: 10
});

players.initialize();

$('#remote .typeahead').typeahead(null, {
  name: 'players',
  displayKey: 'name',
  source: players.ttAdapter(),
  templates: {
    suggestion: function(o) {
      return '<p><strong>' + o.name.replace(/&/g, "&amp;").replace(/</g, "&lt;").replace(/>/g, "&gt;") + '</strong><span class="right">' + o.points + '&nbsp;points</span></p>'
    }
  }
}).on('typeahead:selected', function(e, data) {
  $('#playerform').submit();
});
