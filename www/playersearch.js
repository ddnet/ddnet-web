var players = new Bloodhound({
  datumTokenizer: Bloodhound.tokenizers.obj.whitespace('name'),
  queryTokenizer: Bloodhound.tokenizers.whitespace,
  remote: '/players/?query=%QUERY',
  limit: 12
});

players.initialize();

const typeaheadDataset = {
  name: 'players',
  displayKey: 'name',
  source: players.ttAdapter(),
  templates: {
    suggestion: function(o) {
      return '<p><strong>' + o.name.replace(/&/g, "&amp;").replace(/</g, "&lt;").replace(/>/g, "&gt;") + '</strong><span class="right">' + o.points + '&nbsp;points</span></p>'
    }
  }
};

$('#playerform .typeahead').typeahead(null, typeaheadDataset).on('typeahead:selected', function(e, data) {
  $('#playerform').submit();
});

$('#playerform2 .typeahead').typeahead(null, typeaheadDataset).on('typeahead:selected', function(e, data) {
  $('#playerform2').submit();
});