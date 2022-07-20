const operationsUrl = 'ajax.php';

function formatUrl() {
    return `${operationsUrl}?url=${$('#urlInput').val()}`;
}

$(function() {
    $('#urlInput').on('keyup keypress', (e) => {
      if (e.keyCode === 13) {
         return false;
      }
  });

  $('form').submit((e) => {
      e.preventDefault();

      $.get(formatUrl(), (res) => {
          let result = JSON.parse(res);
          if (result.error) {
              alert(`Произошла ошибка: ${result.error}`);
          } else {
              $('.result').empty();
              $('.result').append(result.content);
          }
      });
  });

});