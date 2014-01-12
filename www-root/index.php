<!DOCTYPE html>
<html>
<head>
    <title>DTable</title>
</head>
<body>
<h1>DTable</h1>

<div id="table"></div>
<div id="table2"></div>

<script src="js/jquery.js"></script>
<script src="js/nunjucks.js"></script>
<script src="js/dtable/dtable.jquery.min.js"></script>
<script src="//localhost:35729/livereload.js"></script>

<script>
    $().ready(function(){
        $("#table").dtable({
            definition: {
                name: "json_url",
                options: {
                    url: "/json/definition.json",
                    timestamp: true
                }
            },
            logger: {
                name: "default",
                options: {
                    debug: true
                }
            }
        });
    });
</script>
</body>
</html>