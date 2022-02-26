<!DOCTYPE html>
<html>
<head>
  <meta charset=utf-8>
  <meta name=viewport content="width=device-width, initial-scale=1">
  <title>Shopping List</title>
  <link rel="stylesheet" href="Shopping.css">
  <link href=http://fonts.googleapis.com/css?family=Playfair+Display:400,400italic,700,700italic,900,900italic rel=stylesheet>
  <link href=http://fonts.googleapis.com/css?family=Fira+Sans:300,400,500,700,300italic,400italic,500italic,700italic rel=stylesheet>
  <link href=http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900,200italic,300italic,400italic,600italic,700italic,900italic rel=stylesheet>
  <link href=http://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css rel=stylesheet>
  <style>
   
  </style>
</head>
<body>
     
     
  <aside id="1">
    <h1>Groceries</h1>
    <br>
    Please write your item:
    <br><br><br><br>

  </aside>
  <script>
    var aside = document.querySelector('aside'),
        div = document.createElement('div'),
        text = document.createElement('input'),
        button = document.createElement('input')
    text.type = 'text'
    text.id = 'input'
    button.type = 'button'
    button.setAttribute('data-button','outline')
    button.value = '➕'
    button.setAttribute('onclick','addItem(input.value)')
    div.appendChild(text)
    div.appendChild(button)
    aside.appendChild(div)

    function addItem(text){
      var div = document.querySelector('div'),
          input = document.getElementById('input')
      if (text !== ''){
        input.value = ''
        var label = document.createElement('label'),
            input = document.createElement('input'),
            span = document.createElement('span')
        input.type = 'checkbox'
        span.innerHTML = text
        label.appendChild(input)
        label.appendChild(span)
        div.parentNode.insertBefore(label,div)
        
      }
    }
    $(function() {
        $("#btn").click(function() {
            
            $('input[type=checkbox]').each(function () {
                if (this.checked)
                    $(this).remove();
            });
        });
    });
    
  </script>
</body>
</html>