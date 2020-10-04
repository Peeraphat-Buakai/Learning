<html>
  <head>
  <meta charset="UTF-8">
    <script>

    async function getDataFromAPI() {
      let response = await fetch("https://covid19.th-stat.com/api/open/cases")
      let rawData = await response.text()
      let objectData = JSON.parse(rawData)
      let result = document.getElemntById('result')

      for(let i=0 ; i< objectData.Data.length ; i++)
      {
        let content = objectData.data[i].Province + ' : ' + objectData.data[i].ProvinceId + ' คน '

        let td = document.createElement('li')
        li.innerHTML = content
        result.appendChild(li)
      }
    }
getDataFromAPI()
    </script>
    
</head>

<body>
  
<?php

  $menu = $_POST["menu"];

  if ($menu == "mon") {
    echo "
            <ul id="result"></ul>
    "
  }

?>



</body>

</html>
