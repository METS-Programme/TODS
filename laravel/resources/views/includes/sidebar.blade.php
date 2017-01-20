
<html>
<head>
    <title> Sidebar Menu</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
        body {
            margin:0;
            padding:0;
            font-family: "Helvetica Neue", Helvetica, Arial;
            width:10%;
            height: 100%;
        }
        #sidebar{
            background: #444444;
            display: block;
            position: absolute;
            left: 0px; top: 55px; bottom: 0;
            transition:left 0.3s linear;
            vertical-align: bottom;
            float:left;
            text-align: center;
        }

        #sidebar.visible{
            left:0px;
            transition:left 0.3s linear;

        }
        ul{
            margin:0px;
            padding:0px;
        }
        ul li {
            list-style: none;
            display: block;
            list-style-type: square;
            list-style-position: inside;
        }
        ul li a{
            color:#ccc;
            border-bottom:1px solid #FFFFFF;
            display: block;
            width:100px;
            padding: 20px;
            padding-right: 100px;
            text-decoration: none;
        }

        ul li:hover{
            background: #c7ddef;
            transition:linear all 0.40s;
            margin-left:10px;
        }

        ul li a:hover{
            color: black;
        }

    </style>
</head>
<body>
   <div id="sidebar" class="visible">
       <ul>
           <li><a href=""> Home </a> </li>
           <li><a href=""> Tool Registration </a> </li>
           <li><a href=""> Tool Order </a> </li>
           <li><a href=""> Tool Pickup </a> </li>
           <li><a href=""> Tool Distribution </a> </li>
           <li><a href=""> Print Ordering </a> </li>
           <li><a href=""> Log out </a> </li>
       </ul>
   </div>

</body>
</html>