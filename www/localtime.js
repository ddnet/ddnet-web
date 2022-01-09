// Script to show dates using local timezone and locale.
$(document).ready(function () {
  $("*[data-type='date']").each(function (i) {
    const dateFormat = $(this).data("datefmt");
    const date = new Date($(this).data("date"));
    const hasTitle = typeof $(this).attr('title') !== undefined && $(this).attr('title') !== false;
    if (dateFormat === "time") {
      const text = date.toLocaleTimeString(undefined, {
          hour: "2-digit",
          minute: "2-digit",
        });
      $(this).text(text);
      if(hasTitle) $(this).attr('title', text);
    } else if (dateFormat === "date") {
      const text = date.toLocaleDateString();
      $(this).text(text);
      if(hasTitle) $(this).attr('title', text);
    } else if (dateFormat === "datetime") {
      const text = date.toLocaleString();
      $(this).text(text);
      if(hasTitle) $(this).attr('title', text);
    }
  });
});
