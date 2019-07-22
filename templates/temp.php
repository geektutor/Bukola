<?php
/*
	Template Name: Template Page
*/
do_action( 'genesis_doctype' );
do_action( 'genesis_title' );
do_action( 'genesis_meta' ); //* comment this if you dont want child theme's style.css to load
wp_head(); //* we need this for plugins
?>
<meta charset="UTF-8">
    <link rel="stylesheet" href="">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Template Page</title>
</head>

<body>

<!-- Body of the code here-->


  <?php
	wp_footer(); //* we need this for plugins
	?>
</body>
<script src="a.js"></script>
</html>