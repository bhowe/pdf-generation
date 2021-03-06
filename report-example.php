<?php

ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(-1);


$html = '
<html>
<head>

    <title>Selenate Test Results</title>

    <style type="text/css">

        .test-results-header {

        }

        .test-result-table {

            border: 1px solid black;
            width: 800px;

        }

        .test-result-table-header-cell {

            border-bottom: 1px solid black;
            background-color: silver;

        }

        .test-result-step-command-cell {

            border-bottom: 1px solid gray;

        }

        .test-result-step-description-cell {

            border-bottom: 1px solid gray;

        }

        .test-result-step-result-cell-ok {

            border-bottom: 1px solid gray;
            background-color: green;

        }

        .test-result-step-result-cell-failure {

            border-bottom: 1px solid gray;
            background-color: red;

        }

        .test-result-step-result-cell-notperformed {

            border-bottom: 1px solid gray;
            background-color: white;


        }

        .test-result-describe-cell {
            background-color: tan;
            font-style: italic;
        }

        .test-result-step-row {

        }

        .test-result-comment-row {
            
        }

        .test-result-step-row-altone {
        /* background-color: white; */
        }

        .test-result-step-row-alttwo {
        /* background-color: cadetblue; */
        }


        .test-cast-status-box-ok {
            border: 1px solid black;
            float: left;
            margin-right: 10px;
            width: 45px;
            height: 25px;
            background-color: green;
        }

    </style>


</head>


<body>


<h1 class="test-results-header">Selenate Test Results (2010-Sep-01)</h1>


<h2 class="test-result-name"><div class="test-cast-status-box-ok">&nbsp;</div> Test Case: Something or Another (12437ms)</h2>
<table class="test-result-table" cellspacing="0">

    <thead>
    <tr>
        <td class="test-result-table-header-cell">Selenium Step</td>
        <td class="test-result-table-header-cell">Description</td>
        <td class="test-result-table-header-cell">Result</td>
    </tr>
    </thead>
    <tbody>
    <tr class="test-result-step-row test-result-step-row-altone">
        <td class="test-result-step-command-cell">open /</td>
        <td class="test-result-step-description-cell">Open browser to "/"</td>
        <td class="test-result-step-result-cell-ok">OK</td>
    </tr>
    <tr class="test-result-step-row test-result-comment-row">
        <td class="test-result-describe-cell" colspan="3">Describe: This is a comment</td>
    </tr>
    <tr class="test-result-step-row test-result-step-row-alttwo">
        <td class="test-result-step-command-cell">click btnG</td>
        <td class="test-result-step-description-cell">Click on page element with identifier of "btnG"</td>
        <td class="test-result-step-result-cell-failure">FAILURE - Unable to find element named "btnG"</td>
    </tr>
    <tr class="test-result-step-row test-result-step-row-altone">
        <td class="test-result-step-command-cell">assertTitle something</td>
        <td class="test-result-step-description-cell">Test that the title of the page is "something"</td>
        <td class="test-result-step-result-cell-notperformed">NOT PERFORMED</td>
    </tr>
    </tbody>


</table>


</body>
</html>

';


//==============================================================
//==============================================================
//==============================================================

include("mpdf.php");

$mpdf=new mPDF(); 

$mpdf->WriteHTML($html);
$mpdf->Output();
exit;

//==============================================================
//==============================================================
//==============================================================


?>