<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">

    <title>select</title>
</head>
<body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>


<div class = "row">
    <label>Materialize Multi Select</label>
    <select multiple class="select_all">
        <option value="" disabled selected>Choose your option</option>
        <option value = "1">Mango</option>
        <option value = "24">Orange</option>
    </select>
</div>
<script>
    $(document).ready(function() {
        // $('select').val([1]);
        $('select').formSelect();
        $('select.select_all').siblings('ul').prepend('<li id=sm_select_all><span>Select All</span></li>');
        $('li#sm_select_all').on('click', function () {
            var jq_elem = $(this),
                jq_elem_span = jq_elem.find('span'),
                select_all = jq_elem_span.text() == 'Select All',
                set_text = select_all ? 'Select None' : 'Select All';
            jq_elem_span.text(set_text);
            jq_elem.siblings('li').filter(function() {
                return $(this).find('input').prop('checked') != select_all;
            }).click();
        });
    })
</script>
</body>
</html>
