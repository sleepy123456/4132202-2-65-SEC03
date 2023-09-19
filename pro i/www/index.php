<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Button</title>
</head>
<body>
    <h1>dataเลขโง่ๆ1-10</h1>
    <button id="getData">click me</button>
    <div id="dataContainer"></div>
    <script>
        document.getElementById('getData').addEventListener('click', function() {
            var container = document.getElementById('dataContainer');
            container.innerHTML = 'Loading...';
            fetch('get_data.php')
            .then(response => response.text())
            .then(data => {
                container.innerHTML = data;
            });
        });
    </script>
</body>
</html>