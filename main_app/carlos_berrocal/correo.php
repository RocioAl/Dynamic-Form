<!DOCTYPE html>
<html>

<head>
  
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <title></title>
    <link rel="shortcut icon" href="./img/icono.ico">
    <META http-equiv='Content-Type' content='text/html' charset='utf-8' />
    <script src="https://code.jquery.com/jquery-2.2.3.min.js" crossorigin="anonymous"></script>
    <!-- Font Icon -->
    <!--<link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">-->
    <link rel="stylesheet" href="vendor/jquery-ui/jquery-ui.min.css">
    <!--SELECT DEPENDE DE OTRO-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <!-- Main css -->

    <style>
        <script src="jquery-3.2.1.min.js"></script>

        /*ETIQUETA SELECT*/
        <script>$("#creditos").change(function() {
                var value2=$(this).find("option:selected") .attr("data-value2");
                $("#wCoin").val(value2);
            }

        );

        $("#enviar").click(function() {
                console.log($("form").serialize());
            }

        );

        </script><style type="text/css">body {
            margin: 0;
            padding: 0;
        }

        h1 {
            margin: 25px auto 0;
            text-align: center;
            text-transform: uppercase;
            /*font-size: 20px;*/
        }

        h5 {
            margin: 25px auto 0;
            text-align: center;
            text-transform: uppercase;
            /*font-size: 20px;*/
            padding-bottom: 15px;
        }

        h3 {
            margin: 25px auto 0;
            text-align: center;
            text-transform: uppercase;
            /*font-size: 20px;*/
            padding-bottom: 15px;
        }

        .center {
            display: block;
            text-align: center;
            margin: 20px auto;
        }
    </style>


    <style>
        .valor-desplegable {
            position: relative;
            width: 200px;
            height: 25px;
            overflow: hidden;
        }

        .valor-desplegable:hover {
            overflow: visible;
        }

        .valor-desplegable .valorTexto {
            width: 200px;
            height: 25px;
            line-height: 25px;
            padding-left: 4px;
            background: white;
            border: 1px solid #ddd;
            position: relative;
            box-sizing: border-box;
            color: #222;
        }

        .valor-desplegable .valorTexto::after {
            content: "\25BF";
            position: absolute;
            right: 4px;
            color: #222 !important;
        }

        .valor-desplegable>ol,
        .valor-desplegable>ol>li>ol {
            list-style: none;
            padding-left: 0;
            position: absolute;
            top: 24px;
            border: 1px solid #ddd;
            width: 200px;
            margin-top: 0;
            box-sizing: border-box;
            background: white;
        }

        .valor-desplegable li {
            display: block;
            height: 25px;
            line-height: 25px;
            padding-left: 4px;
            border-bottom: 1px solid #f5f5f5;
            position: relative;
            overflow: hidden;
            cursor: pointer;
        }

        .valor-desplegable li:hover {
            overflow: visible;
            background: #f8f8f8;
        }

        .valor-desplegable>ol>li>ol {
            top: -1px;
            left: 198px;
        }

        .valor-desplegable>ol>li>ol::before {
            content: "\25B9";
            position: absolute;
            left: -15px;
        }
    </style>

    <!--ESTILO PARA MARK INPUT NUMERO DE GUIA-->
    <style>
        /* Libary CSS */
        .shell {
            position: relative;
            line-height: 1;
        }

        .shell span {
            position: absolute;
            /* left: 3px; */
            top: 1px;
            color: red;
            pointer-events: none;
            z-index: -1;
        }

        .shell span i {
            /* any of these 3 will work */
            color: transparent;
            opacity: 0;
            visibility: hidden;
        }

        input.masked,
        .shell span {
            font-size: 16px;
            font-family: monospace;
            /* padding-right: 10px; */
            background-color: transparent;
            text-transform: uppercase;
        }

        /* Look and feel (not lib specific) */
        li {
            line-height: 2;
            font-family: helvetica;
            list-style-type: none;
            /* border-bottom: 1px solid #ccc; */
        }

        label {
            display: inline-block;
            /* width: 14em; */
        }
    </style>

    <!--estilo para autocompletar input color-->
    <style>
        /*the container must be positioned relative:*/
        .autocomplete {
            position: relative;
            display: inline-block;
        }



        .autocomplete-items {
            position: absolute;
            border: 1px solid #d4d4d4;
            border-bottom: none;
            border-top: none;
            z-index: 99;
            /*position the autocomplete items to be the same width as the container:*/
            top: 100%;
            left: 0;
            right: 0;
            color: red;
        }

        .autocomplete-items div {
            padding: 10px;
            cursor: pointer;
            background-color: #fff;
            border-bottom: 1px solid #d4d4d4;
        }

        /*when hovering an item:*/
        .autocomplete-items div:hover {
            background-color: #e9e9e9;
        }

        /*when navigating through the items using the arrow keys:*/
        .autocomplete-active {
            background-color: DodgerBlue !important;
            color: #ffffff;
        }
    </style>
    <!--STYLE.CSS-->

    </style>
    <!--ASSETS MAIN.CSS-->


    <style>
        /*assets/main.css*/
        @charset "UTF-8";
        @import url(font-awesome.min.css);
        @import "https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600";

        /*
	Projection by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
*/

        /* Reset */

        html,
        body,
        div,
        span,
        applet,
        object,
        iframe,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        p,
        blockquote,
        pre,
        a,
        abbr,
        acronym,
        address,
        big,
        cite,
        code,
        del,
        dfn,
        em,
        img,
        ins,
        kbd,
        q,
        s,
        samp,
        small,
        strike,
        strong,
        sub,
        sup,
        tt,
        var,
        b,
        u,
        i,
        center,
        dl,
        dt,
        dd,
        ol,
        ul,
        li,
        fieldset,
        legend,
        article,
        aside,
        canvas,
        details,
        embed,
        figure,
        figcaption,
        footer,
        header,
        hgroup,
        menu,
        nav,
        output,
        ruby,
        summary,
        time,
        mark,
        audio,
        video {
            margin: 0;
            padding: 0;
            border: 0;
            font-size: 100%;
            font: inherit;
            vertical-align: baseline;
        }

        article,
        aside,
        details,
        figcaption,
        figure,
        footer,
        header,
        hgroup,
        menu,
        nav {
            display: block;
        }

        body {
            line-height: 1;
        }

        ol,
        ul {
            list-style: none;
        }

        blockquote,
        q {
            quotes: none;
        }

        blockquote:before,
        blockquote:after,
        q:before,
        q:after {
            content: '';
            content: none;
        }

        /*table {*/
        /*	border-collapse: collapse;*/
        /*	border-spacing: 0;*/
        /*}*/

        body {
            -webkit-text-size-adjust: none;
        }

        /* Box Model */

        *,
        *:before,
        *:after {
            -moz-box-sizing: border-box;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
        }

        /* Containers */

        .container {
            margin-left: auto;
            margin-right: auto;
        }

        .container.\31 25\25 {
            width: 100%;
            max-width: 100em;
            min-width: 80em;
        }

        .container.\37 5\25 {
            width: 60em;
        }

        .container.\35 0\25 {
            width: 40em;
        }

        .container.\32 5\25 {
            width: 20em;
        }

        .container {
            width: 80em;
        }

        @media screen and (max-width: 1680px) {

            .container.\31 25\25 {
                width: 100%;
                max-width: 100em;
                min-width: 80em;
            }

            .container.\37 5\25 {
                width: 60em;
            }

            .container.\35 0\25 {
                width: 40em;
            }

            .container.\32 5\25 {
                width: 20em;
            }

            .container {
                width: 80em;
            }

        }

        @media screen and (max-width: 1280px) {

            .container.\31 25\25 {
                width: 100%;
                max-width: 81.25em;
                min-width: 65em;
            }

            .container.\37 5\25 {
                width: 48.75em;
            }

            .container.\35 0\25 {
                width: 32.5em;
            }

            .container.\32 5\25 {
                width: 16.25em;
            }

            .container {
                width: 65em;
            }

        }

        @media screen and (max-width: 980px) {

            .container.\31 25\25 {
                width: 100%;
                max-width: 112.5%;
                min-width: 90%;
            }

            .container.\37 5\25 {
                width: 67.5%;
            }

            .container.\35 0\25 {
                width: 45%;
            }

            .container.\32 5\25 {
                width: 22.5%;
            }

            .container {
                width: 90%;
            }

        }

        @media screen and (max-width: 736px) {

            .container.\31 25\25 {
                width: 100%;
                max-width: 112.5%;
                min-width: 90%;
            }

            .container.\37 5\25 {
                width: 67.5%;
            }

            .container.\35 0\25 {
                width: 45%;
            }

            .container.\32 5\25 {
                width: 22.5%;
            }

            .container {
                width: 90% !important;
            }

        }

        @media screen and (max-width: 480px) {

            .container.\31 25\25 {
                width: 100%;
                max-width: 112.5%;
                min-width: 90%;
            }

            .container.\37 5\25 {
                width: 67.5%;
            }

            .container.\35 0\25 {
                width: 45%;
            }

            .container.\32 5\25 {
                width: 22.5%;
            }

            .container {
                width: 90% !important;
            }

        }

        /* Grid */

        .row {
            border-bottom: solid 1px transparent;
            -moz-box-sizing: border-box;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
        }

        .row>* {
            float: left;
            -moz-box-sizing: border-box;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
        }

        .row:after,
        .row:before {
            content: '';
            display: block;
            clear: both;
            height: 0;
        }

        .row.uniform>*> :first-child {
            margin-top: 0;
        }

        .row.uniform>*> :last-child {
            margin-bottom: 0;
        }

        .row.\30 \25>* {
            padding: 0 0 0 0em;
        }

        .row.\30 \25 {
            margin: 0 0 -1px 0em;
        }

        .row.uniform.\30 \25>* {
            padding: 0em 0 0 0em;
        }

        .row.uniform.\30 \25 {
            margin: 0em 0 -1px 0em;
        }

        .row>* {
            padding: 0 0 0 2em;
        }

        .row {
            margin: 0 0 -1px -2em;
        }

        .row.uniform>* {
            padding: 2em 0 0 2em;
        }

        .row.uniform {
            margin: -2em 0 -1px -2em;
        }

        .row.\32 00\25>* {
            padding: 0 0 0 4em;
        }

        .row.\32 00\25 {
            margin: 0 0 -1px -4em;
        }

        .row.uniform.\32 00\25>* {
            padding: 4em 0 0 4em;
        }

        .row.uniform.\32 00\25 {
            margin: -4em 0 -1px -4em;
        }

        .row.\31 50\25>* {
            padding: 0 0 0 3em;
        }

        .row.\31 50\25 {
            margin: 0 0 -1px -3em;
        }

        .row.uniform.\31 50\25>* {
            padding: 3em 0 0 3em;
        }

        .row.uniform.\31 50\25 {
            margin: -3em 0 -1px -3em;
        }

        .row.\35 0\25>* {
            padding: 0 0 0 1em;
        }

        .row.\35 0\25 {
            margin: 0 0 -1px -1em;
        }

        .row.uniform.\35 0\25>* {
            padding: 1em 0 0 1em;
        }

        .row.uniform.\35 0\25 {
            margin: -1em 0 -1px -1em;
        }

        .row.\32 5\25>* {
            padding: 0 0 0 0.5em;
        }

        .row.\32 5\25 {
            margin: 0 0 -1px -0.5em;
        }

        .row.uniform.\32 5\25>* {
            padding: 0.5em 0 0 0.5em;
        }

        .row.uniform.\32 5\25 {
            margin: -0.5em 0 -1px -0.5em;
        }

        .\31 2u,
        .\31 2u\24 {
            width: 100%;
            clear: none;
            margin-left: 0;
        }

        .\31 1u,
        .\31 1u\24 {
            width: 91.6666666667%;
            clear: none;
            margin-left: 0;
        }

        .\31 0u,
        .\31 0u\24 {
            width: 83.3333333333%;
            clear: none;
            margin-left: 0;
        }

        .\39 u,
        .\39 u\24 {
            width: 75%;
            clear: none;
            margin-left: 0;
        }

        .\38 u,
        .\38 u\24 {
            width: 66.6666666667%;
            clear: none;
            margin-left: 0;
        }

        .\37 u,
        .\37 u\24 {
            width: 58.3333333333%;
            clear: none;
            margin-left: 0;
        }

        .\36 u,
        .\36 u\24 {
            width: 50%;
            clear: none;
            margin-left: 0;
        }

        .\35 u,
        .\35 u\24 {
            width: 41.6666666667%;
            clear: none;
            margin-left: 0;
        }

        .\34 u,
        .\34 u\24 {
            width: 33.3333333333%;
            clear: none;
            margin-left: 0;
        }

        .\33 u,
        .\33 u\24 {
            width: 25%;
            clear: none;
            margin-left: 0;
        }

        .\32 u,
        .\32 u\24 {
            width: 16.6666666667%;
            clear: none;
            margin-left: 0;
        }

        .\31 u,
        .\31 u\24 {
            width: 8.3333333333%;
            clear: none;
            margin-left: 0;
        }

        .\31 2u\24+*,
        .\31 1u\24+*,
        .\31 0u\24+*,
        .\39 u\24+*,
        .\38 u\24+*,
        .\37 u\24+*,
        .\36 u\24+*,
        .\35 u\24+*,
        .\34 u\24+*,
        .\33 u\24+*,
        .\32 u\24+*,
        .\31 u\24+* {
            clear: left;
        }

        .\-11u {
            margin-left: 91.66667%;
        }

        .\-10u {
            margin-left: 83.33333%;
        }

        .\-9u {
            margin-left: 75%;
        }

        .\-8u {
            margin-left: 66.66667%;
        }

        .\-7u {
            margin-left: 58.33333%;
        }

        .\-6u {
            margin-left: 50%;
        }

        .\-5u {
            margin-left: 41.66667%;
        }

        .\-4u {
            margin-left: 33.33333%;
        }

        .\-3u {
            margin-left: 25%;
        }

        .\-2u {
            margin-left: 16.66667%;
        }

        .\-1u {
            margin-left: 8.33333%;
        }

        @media screen and (max-width: 1680px) {

            .row>* {
                padding: 0 0 0 2em;
            }

            .row {
                margin: 0 0 -1px -2em;
            }

            .row.uniform>* {
                padding: 2em 0 0 2em;
            }

            .row.uniform {
                margin: -2em 0 -1px -2em;
            }

            .row.\32 00\25>* {
                padding: 0 0 0 4em;
            }

            .row.\32 00\25 {
                margin: 0 0 -1px -4em;
            }

            .row.uniform.\32 00\25>* {
                padding: 4em 0 0 4em;
            }

            .row.uniform.\32 00\25 {
                margin: -4em 0 -1px -4em;
            }

            .row.\31 50\25>* {
                padding: 0 0 0 3em;
            }

            .row.\31 50\25 {
                margin: 0 0 -1px -3em;
            }

            .row.uniform.\31 50\25>* {
                padding: 3em 0 0 3em;
            }

            .row.uniform.\31 50\25 {
                margin: -3em 0 -1px -3em;
            }

            .row.\35 0\25>* {
                padding: 0 0 0 1em;
            }

            .row.\35 0\25 {
                margin: 0 0 -1px -1em;
            }

            .row.uniform.\35 0\25>* {
                padding: 1em 0 0 1em;
            }

            .row.uniform.\35 0\25 {
                margin: -1em 0 -1px -1em;
            }

            .row.\32 5\25>* {
                padding: 0 0 0 0.5em;
            }

            .row.\32 5\25 {
                margin: 0 0 -1px -0.5em;
            }

            .row.uniform.\32 5\25>* {
                padding: 0.5em 0 0 0.5em;
            }

            .row.uniform.\32 5\25 {
                margin: -0.5em 0 -1px -0.5em;
            }

            .\31 2u\28xlarge\29,
            .\31 2u\24\28xlarge\29 {
                width: 100%;
                clear: none;
                margin-left: 0;
            }

            .\31 1u\28xlarge\29,
            .\31 1u\24\28xlarge\29 {
                width: 91.6666666667%;
                clear: none;
                margin-left: 0;
            }

            .\31 0u\28xlarge\29,
            .\31 0u\24\28xlarge\29 {
                width: 83.3333333333%;
                clear: none;
                margin-left: 0;
            }

            .\39 u\28xlarge\29,
            .\39 u\24\28xlarge\29 {
                width: 75%;
                clear: none;
                margin-left: 0;
            }

            .\38 u\28xlarge\29,
            .\38 u\24\28xlarge\29 {
                width: 66.6666666667%;
                clear: none;
                margin-left: 0;
            }

            .\37 u\28xlarge\29,
            .\37 u\24\28xlarge\29 {
                width: 58.3333333333%;
                clear: none;
                margin-left: 0;
            }

            .\36 u\28xlarge\29,
            .\36 u\24\28xlarge\29 {
                width: 50%;
                clear: none;
                margin-left: 0;
            }

            .\35 u\28xlarge\29,
            .\35 u\24\28xlarge\29 {
                width: 41.6666666667%;
                clear: none;
                margin-left: 0;
            }

            .\34 u\28xlarge\29,
            .\34 u\24\28xlarge\29 {
                width: 33.3333333333%;
                clear: none;
                margin-left: 0;
            }

            .\33 u\28xlarge\29,
            .\33 u\24\28xlarge\29 {
                width: 25%;
                clear: none;
                margin-left: 0;
            }

            .\32 u\28xlarge\29,
            .\32 u\24\28xlarge\29 {
                width: 16.6666666667%;
                clear: none;
                margin-left: 0;
            }

            .\31 u\28xlarge\29,
            .\31 u\24\28xlarge\29 {
                width: 8.3333333333%;
                clear: none;
                margin-left: 0;
            }

            .\31 2u\24\28xlarge\29+*,
            .\31 1u\24\28xlarge\29+*,
            .\31 0u\24\28xlarge\29+*,
            .\39 u\24\28xlarge\29+*,
            .\38 u\24\28xlarge\29+*,
            .\37 u\24\28xlarge\29+*,
            .\36 u\24\28xlarge\29+*,
            .\35 u\24\28xlarge\29+*,
            .\34 u\24\28xlarge\29+*,
            .\33 u\24\28xlarge\29+*,
            .\32 u\24\28xlarge\29+*,
            .\31 u\24\28xlarge\29+* {
                clear: left;
            }

            .\-11u\28xlarge\29 {
                margin-left: 91.66667%;
            }

            .\-10u\28xlarge\29 {
                margin-left: 83.33333%;
            }

            .\-9u\28xlarge\29 {
                margin-left: 75%;
            }

            .\-8u\28xlarge\29 {
                margin-left: 66.66667%;
            }

            .\-7u\28xlarge\29 {
                margin-left: 58.33333%;
            }

            .\-6u\28xlarge\29 {
                margin-left: 50%;
            }

            .\-5u\28xlarge\29 {
                margin-left: 41.66667%;
            }

            .\-4u\28xlarge\29 {
                margin-left: 33.33333%;
            }

            .\-3u\28xlarge\29 {
                margin-left: 25%;
            }

            .\-2u\28xlarge\29 {
                margin-left: 16.66667%;
            }

            .\-1u\28xlarge\29 {
                margin-left: 8.33333%;
            }

        }

        @media screen and (max-width: 1280px) {

            .row>* {
                padding: 0 0 0 1.5em;
            }

            .row {
                margin: 0 0 -1px -1.5em;
            }

            .row.uniform>* {
                padding: 1.5em 0 0 1.5em;
            }

            .row.uniform {
                margin: -1.5em 0 -1px -1.5em;
            }

            .row.\32 00\25>* {
                padding: 0 0 0 3em;
            }

            .row.\32 00\25 {
                margin: 0 0 -1px -3em;
            }

            .row.uniform.\32 00\25>* {
                padding: 3em 0 0 3em;
            }

            .row.uniform.\32 00\25 {
                margin: -3em 0 -1px -3em;
            }

            .row.\31 50\25>* {
                padding: 0 0 0 2.25em;
            }

            .row.\31 50\25 {
                margin: 0 0 -1px -2.25em;
            }

            .row.uniform.\31 50\25>* {
                padding: 2.25em 0 0 2.25em;
            }

            .row.uniform.\31 50\25 {
                margin: -2.25em 0 -1px -2.25em;
            }

            .row.\35 0\25>* {
                padding: 0 0 0 0.75em;
            }

            .row.\35 0\25 {
                margin: 0 0 -1px -0.75em;
            }

            .row.uniform.\35 0\25>* {
                padding: 0.75em 0 0 0.75em;
            }

            .row.uniform.\35 0\25 {
                margin: -0.75em 0 -1px -0.75em;
            }

            .row.\32 5\25>* {
                padding: 0 0 0 0.375em;
            }

            .row.\32 5\25 {
                margin: 0 0 -1px -0.375em;
            }

            .row.uniform.\32 5\25>* {
                padding: 0.375em 0 0 0.375em;
            }

            .row.uniform.\32 5\25 {
                margin: -0.375em 0 -1px -0.375em;
            }

            .\31 2u\28large\29,
            .\31 2u\24\28large\29 {
                width: 100%;
                clear: none;
                margin-left: 0;
            }

            .\31 1u\28large\29,
            .\31 1u\24\28large\29 {
                width: 91.6666666667%;
                clear: none;
                margin-left: 0;
            }

            .\31 0u\28large\29,
            .\31 0u\24\28large\29 {
                width: 83.3333333333%;
                clear: none;
                margin-left: 0;
            }

            .\39 u\28large\29,
            .\39 u\24\28large\29 {
                width: 75%;
                clear: none;
                margin-left: 0;
            }

            .\38 u\28large\29,
            .\38 u\24\28large\29 {
                width: 66.6666666667%;
                clear: none;
                margin-left: 0;
            }

            .\37 u\28large\29,
            .\37 u\24\28large\29 {
                width: 58.3333333333%;
                clear: none;
                margin-left: 0;
            }

            .\36 u\28large\29,
            .\36 u\24\28large\29 {
                width: 50%;
                clear: none;
                margin-left: 0;
            }

            .\35 u\28large\29,
            .\35 u\24\28large\29 {
                width: 41.6666666667%;
                clear: none;
                margin-left: 0;
            }

            .\34 u\28large\29,
            .\34 u\24\28large\29 {
                width: 33.3333333333%;
                clear: none;
                margin-left: 0;
            }

            .\33 u\28large\29,
            .\33 u\24\28large\29 {
                width: 25%;
                clear: none;
                margin-left: 0;
            }

            .\32 u\28large\29,
            .\32 u\24\28large\29 {
                width: 16.6666666667%;
                clear: none;
                margin-left: 0;
            }

            .\31 u\28large\29,
            .\31 u\24\28large\29 {
                width: 8.3333333333%;
                clear: none;
                margin-left: 0;
            }

            .\31 2u\24\28large\29+*,
            .\31 1u\24\28large\29+*,
            .\31 0u\24\28large\29+*,
            .\39 u\24\28large\29+*,
            .\38 u\24\28large\29+*,
            .\37 u\24\28large\29+*,
            .\36 u\24\28large\29+*,
            .\35 u\24\28large\29+*,
            .\34 u\24\28large\29+*,
            .\33 u\24\28large\29+*,
            .\32 u\24\28large\29+*,
            .\31 u\24\28large\29+* {
                clear: left;
            }

            .\-11u\28large\29 {
                margin-left: 91.66667%;
            }

            .\-10u\28large\29 {
                margin-left: 83.33333%;
            }

            .\-9u\28large\29 {
                margin-left: 75%;
            }

            .\-8u\28large\29 {
                margin-left: 66.66667%;
            }

            .\-7u\28large\29 {
                margin-left: 58.33333%;
            }

            .\-6u\28large\29 {
                margin-left: 50%;
            }

            .\-5u\28large\29 {
                margin-left: 41.66667%;
            }

            .\-4u\28large\29 {
                margin-left: 33.33333%;
            }

            .\-3u\28large\29 {
                margin-left: 25%;
            }

            .\-2u\28large\29 {
                margin-left: 16.66667%;
            }

            .\-1u\28large\29 {
                margin-left: 8.33333%;
            }

        }

        @media screen and (max-width: 980px) {

            .row>* {
                padding: 0 0 0 1.5em;
            }

            .row {
                margin: 0 0 -1px -1.5em;
            }

            .row.uniform>* {
                padding: 1.5em 0 0 1.5em;
            }

            .row.uniform {
                margin: -1.5em 0 -1px -1.5em;
            }

            .row.\32 00\25>* {
                padding: 0 0 0 3em;
            }

            .row.\32 00\25 {
                margin: 0 0 -1px -3em;
            }

            .row.uniform.\32 00\25>* {
                padding: 3em 0 0 3em;
            }

            .row.uniform.\32 00\25 {
                margin: -3em 0 -1px -3em;
            }

            .row.\31 50\25>* {
                padding: 0 0 0 2.25em;
            }

            .row.\31 50\25 {
                margin: 0 0 -1px -2.25em;
            }

            .row.uniform.\31 50\25>* {
                padding: 2.25em 0 0 2.25em;
            }

            .row.uniform.\31 50\25 {
                margin: -2.25em 0 -1px -2.25em;
            }

            .row.\35 0\25>* {
                padding: 0 0 0 0.75em;
            }

            .row.\35 0\25 {
                margin: 0 0 -1px -0.75em;
            }

            .row.uniform.\35 0\25>* {
                padding: 0.75em 0 0 0.75em;
            }

            .row.uniform.\35 0\25 {
                margin: -0.75em 0 -1px -0.75em;
            }

            .row.\32 5\25>* {
                padding: 0 0 0 0.375em;
            }

            .row.\32 5\25 {
                margin: 0 0 -1px -0.375em;
            }

            .row.uniform.\32 5\25>* {
                padding: 0.375em 0 0 0.375em;
            }

            .row.uniform.\32 5\25 {
                margin: -0.375em 0 -1px -0.375em;
            }

            .\31 2u\28medium\29,
            .\31 2u\24\28medium\29 {
                width: 100%;
                clear: none;
                margin-left: 0;
            }

            .\31 1u\28medium\29,
            .\31 1u\24\28medium\29 {
                width: 91.6666666667%;
                clear: none;
                margin-left: 0;
            }

            .\31 0u\28medium\29,
            .\31 0u\24\28medium\29 {
                width: 83.3333333333%;
                clear: none;
                margin-left: 0;
            }

            .\39 u\28medium\29,
            .\39 u\24\28medium\29 {
                width: 75%;
                clear: none;
                margin-left: 0;
            }

            .\38 u\28medium\29,
            .\38 u\24\28medium\29 {
                width: 66.6666666667%;
                clear: none;
                margin-left: 0;
            }

            .\37 u\28medium\29,
            .\37 u\24\28medium\29 {
                width: 58.3333333333%;
                clear: none;
                margin-left: 0;
            }

            .\36 u\28medium\29,
            .\36 u\24\28medium\29 {
                width: 50%;
                clear: none;
                margin-left: 0;
            }

            .\35 u\28medium\29,
            .\35 u\24\28medium\29 {
                width: 41.6666666667%;
                clear: none;
                margin-left: 0;
            }

            .\34 u\28medium\29,
            .\34 u\24\28medium\29 {
                width: 33.3333333333%;
                clear: none;
                margin-left: 0;
            }

            .\33 u\28medium\29,
            .\33 u\24\28medium\29 {
                width: 25%;
                clear: none;
                margin-left: 0;
            }

            .\32 u\28medium\29,
            .\32 u\24\28medium\29 {
                width: 16.6666666667%;
                clear: none;
                margin-left: 0;
            }

            .\31 u\28medium\29,
            .\31 u\24\28medium\29 {
                width: 8.3333333333%;
                clear: none;
                margin-left: 0;
            }

            .\31 2u\24\28medium\29+*,
            .\31 1u\24\28medium\29+*,
            .\31 0u\24\28medium\29+*,
            .\39 u\24\28medium\29+*,
            .\38 u\24\28medium\29+*,
            .\37 u\24\28medium\29+*,
            .\36 u\24\28medium\29+*,
            .\35 u\24\28medium\29+*,
            .\34 u\24\28medium\29+*,
            .\33 u\24\28medium\29+*,
            .\32 u\24\28medium\29+*,
            .\31 u\24\28medium\29+* {
                clear: left;
            }

            .\-11u\28medium\29 {
                margin-left: 91.66667%;
            }

            .\-10u\28medium\29 {
                margin-left: 83.33333%;
            }

            .\-9u\28medium\29 {
                margin-left: 75%;
            }

            .\-8u\28medium\29 {
                margin-left: 66.66667%;
            }

            .\-7u\28medium\29 {
                margin-left: 58.33333%;
            }

            .\-6u\28medium\29 {
                margin-left: 50%;
            }

            .\-5u\28medium\29 {
                margin-left: 41.66667%;
            }

            .\-4u\28medium\29 {
                margin-left: 33.33333%;
            }

            .\-3u\28medium\29 {
                margin-left: 25%;
            }

            .\-2u\28medium\29 {
                margin-left: 16.66667%;
            }

            .\-1u\28medium\29 {
                margin-left: 8.33333%;
            }

        }

        @media screen and (max-width: 736px) {

            .row>* {
                padding: 0 0 0 1.25em;
            }

            .row {
                margin: 0 0 -1px -1.25em;
            }

            .row.uniform>* {
                padding: 1.25em 0 0 1.25em;
            }

            .row.uniform {
                margin: -1.25em 0 -1px -1.25em;
            }

            .row.\32 00\25>* {
                padding: 0 0 0 2.5em;
            }

            .row.\32 00\25 {
                margin: 0 0 -1px -2.5em;
            }

            .row.uniform.\32 00\25>* {
                padding: 2.5em 0 0 2.5em;
            }

            .row.uniform.\32 00\25 {
                margin: -2.5em 0 -1px -2.5em;
            }

            .row.\31 50\25>* {
                padding: 0 0 0 1.875em;
            }

            .row.\31 50\25 {
                margin: 0 0 -1px -1.875em;
            }

            .row.uniform.\31 50\25>* {
                padding: 1.875em 0 0 1.875em;
            }

            .row.uniform.\31 50\25 {
                margin: -1.875em 0 -1px -1.875em;
            }

            .row.\35 0\25>* {
                padding: 0 0 0 0.625em;
            }

            .row.\35 0\25 {
                margin: 0 0 -1px -0.625em;
            }

            .row.uniform.\35 0\25>* {
                padding: 0.625em 0 0 0.625em;
            }

            .row.uniform.\35 0\25 {
                margin: -0.625em 0 -1px -0.625em;
            }

            .row.\32 5\25>* {
                padding: 0 0 0 0.3125em;
            }

            .row.\32 5\25 {
                margin: 0 0 -1px -0.3125em;
            }

            .row.uniform.\32 5\25>* {
                padding: 0.3125em 0 0 0.3125em;
            }

            .row.uniform.\32 5\25 {
                margin: -0.3125em 0 -1px -0.3125em;
            }

            .\31 2u\28small\29,
            .\31 2u\24\28small\29 {
                width: 100%;
                clear: none;
                margin-left: 0;
            }

            .\31 1u\28small\29,
            .\31 1u\24\28small\29 {
                width: 91.6666666667%;
                clear: none;
                margin-left: 0;
            }

            .\31 0u\28small\29,
            .\31 0u\24\28small\29 {
                width: 83.3333333333%;
                clear: none;
                margin-left: 0;
            }

            .\39 u\28small\29,
            .\39 u\24\28small\29 {
                width: 75%;
                clear: none;
                margin-left: 0;
            }

            .\38 u\28small\29,
            .\38 u\24\28small\29 {
                width: 66.6666666667%;
                clear: none;
                margin-left: 0;
            }

            .\37 u\28small\29,
            .\37 u\24\28small\29 {
                width: 58.3333333333%;
                clear: none;
                margin-left: 0;
            }

            .\36 u\28small\29,
            .\36 u\24\28small\29 {
                width: 50%;
                clear: none;
                margin-left: 0;
            }

            .\35 u\28small\29,
            .\35 u\24\28small\29 {
                width: 41.6666666667%;
                clear: none;
                margin-left: 0;
            }

            .\34 u\28small\29,
            .\34 u\24\28small\29 {
                width: 33.3333333333%;
                clear: none;
                margin-left: 0;
            }

            .\33 u\28small\29,
            .\33 u\24\28small\29 {
                width: 25%;
                clear: none;
                margin-left: 0;
            }

            .\32 u\28small\29,
            .\32 u\24\28small\29 {
                width: 16.6666666667%;
                clear: none;
                margin-left: 0;
            }

            .\31 u\28small\29,
            .\31 u\24\28small\29 {
                width: 8.3333333333%;
                clear: none;
                margin-left: 0;
            }

            .\31 2u\24\28small\29+*,
            .\31 1u\24\28small\29+*,
            .\31 0u\24\28small\29+*,
            .\39 u\24\28small\29+*,
            .\38 u\24\28small\29+*,
            .\37 u\24\28small\29+*,
            .\36 u\24\28small\29+*,
            .\35 u\24\28small\29+*,
            .\34 u\24\28small\29+*,
            .\33 u\24\28small\29+*,
            .\32 u\24\28small\29+*,
            .\31 u\24\28small\29+* {
                clear: left;
            }

            .\-11u\28small\29 {
                margin-left: 91.66667%;
            }

            .\-10u\28small\29 {
                margin-left: 83.33333%;
            }

            .\-9u\28small\29 {
                margin-left: 75%;
            }

            .\-8u\28small\29 {
                margin-left: 66.66667%;
            }

            .\-7u\28small\29 {
                margin-left: 58.33333%;
            }

            .\-6u\28small\29 {
                margin-left: 50%;
            }

            .\-5u\28small\29 {
                margin-left: 41.66667%;
            }

            .\-4u\28small\29 {
                margin-left: 33.33333%;
            }

            .\-3u\28small\29 {
                margin-left: 25%;
            }

            .\-2u\28small\29 {
                margin-left: 16.66667%;
            }

            .\-1u\28small\29 {
                margin-left: 8.33333%;
            }

        }

        @media screen and (max-width: 480px) {

            .row>* {
                padding: 0 0 0 1.25em;
            }

            .row {
                margin: 0 0 -1px -1.25em;
            }

            .row.uniform>* {
                padding: 1.25em 0 0 1.25em;
            }

            .row.uniform {
                margin: -1.25em 0 -1px -1.25em;
            }

            .row.\32 00\25>* {
                padding: 0 0 0 2.5em;
            }

            .row.\32 00\25 {
                margin: 0 0 -1px -2.5em;
            }

            .row.uniform.\32 00\25>* {
                padding: 2.5em 0 0 2.5em;
            }

            .row.uniform.\32 00\25 {
                margin: -2.5em 0 -1px -2.5em;
            }

            .row.\31 50\25>* {
                padding: 0 0 0 1.875em;
            }

            .row.\31 50\25 {
                margin: 0 0 -1px -1.875em;
            }

            .row.uniform.\31 50\25>* {
                padding: 1.875em 0 0 1.875em;
            }

            .row.uniform.\31 50\25 {
                margin: -1.875em 0 -1px -1.875em;
            }

            .row.\35 0\25>* {
                padding: 0 0 0 0.625em;
            }

            .row.\35 0\25 {
                margin: 0 0 -1px -0.625em;
            }

            .row.uniform.\35 0\25>* {
                padding: 0.625em 0 0 0.625em;
            }

            .row.uniform.\35 0\25 {
                margin: -0.625em 0 -1px -0.625em;
            }

            .row.\32 5\25>* {
                padding: 0 0 0 0.3125em;
            }

            .row.\32 5\25 {
                margin: 0 0 -1px -0.3125em;
            }

            .row.uniform.\32 5\25>* {
                padding: 0.3125em 0 0 0.3125em;
            }

            .row.uniform.\32 5\25 {
                margin: -0.3125em 0 -1px -0.3125em;
            }

            .\31 2u\28xsmall\29,
            .\31 2u\24\28xsmall\29 {
                width: 100%;
                clear: none;
                margin-left: 0;
            }

            .\31 1u\28xsmall\29,
            .\31 1u\24\28xsmall\29 {
                width: 91.6666666667%;
                clear: none;
                margin-left: 0;
            }

            .\31 0u\28xsmall\29,
            .\31 0u\24\28xsmall\29 {
                width: 83.3333333333%;
                clear: none;
                margin-left: 0;
            }

            .\39 u\28xsmall\29,
            .\39 u\24\28xsmall\29 {
                width: 75%;
                clear: none;
                margin-left: 0;
            }

            .\38 u\28xsmall\29,
            .\38 u\24\28xsmall\29 {
                width: 66.6666666667%;
                clear: none;
                margin-left: 0;
            }

            .\37 u\28xsmall\29,
            .\37 u\24\28xsmall\29 {
                width: 58.3333333333%;
                clear: none;
                margin-left: 0;
            }

            .\36 u\28xsmall\29,
            .\36 u\24\28xsmall\29 {
                width: 50%;
                clear: none;
                margin-left: 0;
            }

            .\35 u\28xsmall\29,
            .\35 u\24\28xsmall\29 {
                width: 41.6666666667%;
                clear: none;
                margin-left: 0;
            }

            .\34 u\28xsmall\29,
            .\34 u\24\28xsmall\29 {
                width: 33.3333333333%;
                clear: none;
                margin-left: 0;
            }

            .\33 u\28xsmall\29,
            .\33 u\24\28xsmall\29 {
                width: 25%;
                clear: none;
                margin-left: 0;
            }

            .\32 u\28xsmall\29,
            .\32 u\24\28xsmall\29 {
                width: 16.6666666667%;
                clear: none;
                margin-left: 0;
            }

            .\31 u\28xsmall\29,
            .\31 u\24\28xsmall\29 {
                width: 8.3333333333%;
                clear: none;
                margin-left: 0;
            }

            .\31 2u\24\28xsmall\29+*,
            .\31 1u\24\28xsmall\29+*,
            .\31 0u\24\28xsmall\29+*,
            .\39 u\24\28xsmall\29+*,
            .\38 u\24\28xsmall\29+*,
            .\37 u\24\28xsmall\29+*,
            .\36 u\24\28xsmall\29+*,
            .\35 u\24\28xsmall\29+*,
            .\34 u\24\28xsmall\29+*,
            .\33 u\24\28xsmall\29+*,
            .\32 u\24\28xsmall\29+*,
            .\31 u\24\28xsmall\29+* {
                clear: left;
            }

            .\-11u\28xsmall\29 {
                margin-left: 91.66667%;
            }

            .\-10u\28xsmall\29 {
                margin-left: 83.33333%;
            }

            .\-9u\28xsmall\29 {
                margin-left: 75%;
            }

            .\-8u\28xsmall\29 {
                margin-left: 66.66667%;
            }

            .\-7u\28xsmall\29 {
                margin-left: 58.33333%;
            }

            .\-6u\28xsmall\29 {
                margin-left: 50%;
            }

            .\-5u\28xsmall\29 {
                margin-left: 41.66667%;
            }

            .\-4u\28xsmall\29 {
                margin-left: 33.33333%;
            }

            .\-3u\28xsmall\29 {
                margin-left: 25%;
            }

            .\-2u\28xsmall\29 {
                margin-left: 16.66667%;
            }

            .\-1u\28xsmall\29 {
                margin-left: 8.33333%;
            }

        }

        /* Basic */

        @-ms-viewport {
            width: device-width;
        }

        body {
            -ms-overflow-style: scrollbar;
        }

        @media screen and (max-width: 480px) {

            html,
            body {
                min-width: 320px;
            }

        }

        body {
            background: #fff;
        }

        body.is-loading *,
        body.is-loading *:before,
        body.is-loading *:after {
            -moz-animation: none !important;
            -webkit-animation: none !important;
            -ms-animation: none !important;
            animation: none !important;
            -moz-transition: none !important;
            -webkit-transition: none !important;
            -ms-transition: none !important;
            transition: none !important;
        }

        /* Type */

        body,
        input,
        textarea {
            color: #9a9a9a;
            font-family: "Source Sans Pro", Arial, Helvetica, sans-serif;
            font-size: 14pt;
            font-weight: 400;
            line-height: 1.65;
        }

        @media screen and (max-width: 1680px) {

            body,
            input,
            textarea {
                font-size: 12pt;
            }

        }

        @media screen and (max-width: 1280px) {

            body,
            input,
            textarea {
                font-size: 12pt;
            }

        }

        @media screen and (max-width: 980px) {

            body,
            input,
            textarea {
                font-size: 12pt;
            }

        }

        @media screen and (max-width: 736px) {

            body,
            input,
            textarea {
                font-size: 12pt;
            }

        }

        @media screen and (max-width: 480px) {

            body,
            input,
            textarea {
                font-size: 12pt;
            }

        }

        a {
            color: #6cc091;
            text-decoration: underline;
        }

        a:hover {
            text-decoration: none;
        }

        strong,
        b {
            color: #555;
            font-weight: 600;
        }

        em,
        i {
            font-style: italic;
        }

        p {
            margin: 0 0 2em 0;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            color: #555;
            font-weight: 400;
            line-height: 1.5;
            margin: 0 0 1em 0;
        }

        h1 a,
        h2 a,
        h3 a,
        h4 a,
        h5 a,
        h6 a {
            color: inherit;
            text-decoration: none;
        }

        h2 {
            font-size: 1.85em;
            font-weight: 300;
        }

        h3 {
            font-size: 1.75em;
        }

        @media screen and (max-width: 480px) {

            h3 {
                font-size: 1.25em;
            }

        }

        h4 {
            font-size: 1.5em;
        }

        h5 {
            font-size: 0.9em;
        }

        h6 {
            font-size: 0.7em;
        }

        sub {
            font-size: 0.8em;
            position: relative;
            top: 0.5em;
        }

        sup {
            font-size: 0.8em;
            position: relative;
            top: -0.5em;
        }

        blockquote {
            border-left: solid 4px #dbdbdb;
            font-style: italic;
            margin: 0 0 2em 0;
            padding: 0.5em 0 0.5em 2em;
        }

        code {
            background: rgba(144, 144, 144, 0.075);
            border-radius: 0;
            border: solid 1px #dbdbdb;
            font-family: "Courier New", monospace;
            font-size: 0.9em;
            margin: 0 0.25em;
            padding: 0.25em 0.65em;
        }

        pre {
            -webkit-overflow-scrolling: touch;
            font-family: "Courier New", monospace;
            font-size: 0.9em;
            margin: 0 0 2em 0;
        }

        pre code {
            display: block;
            line-height: 1.75;
            padding: 1em 1.5em;
            overflow-x: auto;
        }

        hr {
            border: 0;
            border-bottom: solid 1px #dbdbdb;
            margin: 2em 0;
        }

        hr.major {
            margin: 3em 0;
        }

        .align-left {
            text-align: left;
        }

        .align-center {
            text-align: center;
        }

        .align-right {
            text-align: right;
        }

        .inner {
            max-width: 75em;
            margin: 0 auto;
        }

        @media screen and (max-width: 1280px) {

            .inner {
                max-width: 90%;
            }

        }

        @media screen and (max-width: 480px) {

            .inner {
                max-width: 90%;
            }

        }

        /* Section/Article */

        section.special,
        article.special {
            text-align: center;
        }

        section.special article,
        article.special article {
            text-align: left;
        }

        section.wrapper,
        article.wrapper {
            padding: 6em 0;
        }

        section.wrapper header,
        article.wrapper header {
            margin-bottom: 4em;
        }

        section.wrapper header h2,
        article.wrapper header h2 {
            font-size: 2.75em;
            margin: 0 0 .5em 0;
        }

        section.wrapper header p,
        article.wrapper header p {
            font-size: 1em;
        }

        section.wrapper article header,
        article.wrapper article header {
            margin: 0;
        }

        @media screen and (max-width: 980px) {

            section.wrapper,
            article.wrapper {
                padding: 4em 0;
            }

        }

        @media screen and (max-width: 736px) {

            section.wrapper,
            article.wrapper {
                padding: 3em 0;
            }

            section.wrapper header,
            article.wrapper header {
                margin-bottom: 2em;
            }

            section.wrapper header h2,
            article.wrapper header h2 {
                font-size: 2em;
            }

            section.wrapper header p,
            article.wrapper header p {
                font-size: .9em;
            }

        }

        @media screen and (max-width: 480px) {

            section.wrapper article,
            article.wrapper article {
                text-align: center;
            }

        }

        header p {
            color: #bbb;
            position: relative;
            margin: 0 0 1.5em 0;
        }

        header h2+p {
            font-size: 1.25em;
            margin-top: -1em;
        }

        header h3+p {
            font-size: 1.1em;
            margin-top: -0.8em;
        }

        header h4+p,
        header h5+p,
        header h6+p {
            font-size: 0.9em;
            margin-top: -0.6em;
        }

        /* Flex */

        .flex {
            display: -ms-flexbox;
            -ms-flex-wrap: wrap;
            -ms-flex-pack: justify;
            -moz-justify-content: space-between;
            -webkit-justify-content: space-between;
            -ms-justify-content: space-between;
            justify-content: space-between;
            display: -moz-flex;
            display: -webkit-flex;
            display: -ms-flex;
            display: flex;
            -moz-flex-wrap: wrap;
            -webkit-flex-wrap: wrap;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            width: 100%;
        }

        .flex.flex-2 {
            -moz-justify-content: space-between;
            -webkit-justify-content: space-between;
            -ms-justify-content: space-between;
            justify-content: space-between;
        }

        .flex.flex-2 article {
            width: 50%;
        }

        @media screen and (max-width: 980px) {

            .flex.flex-2 article {
                width: 100%;
                margin-bottom: 3em;
            }

            .flex.flex-2 article:last-child {
                margin-bottom: 0;
            }

        }

        @media screen and (max-width: 480px) {

            .flex.flex-2 br {
                display: none;
            }

        }

        /* Form */

        /*	form {*/
        /*		margin: 0 0 2em 0;*/
        /*	}*/

        /*		form .field {*/
        /*			margin-bottom: 1.5em;*/
        /*		}*/

        /*			form .field.half {*/
        /*				display: inline-block;*/
        /*				width: 48%;*/
        /*			}*/

        /*				form .field.half.first {*/
        /*					margin-right: 3%;*/
        /*				}*/

        /*		@media screen and (max-width: 980px) {*/

        /*			form .field.half {*/
        /*				display: block;*/
        /*				width: 100%;*/
        /*			}*/

        /*				form .field.half.first {*/
        /*					margin-right: 0;*/
        /*				}*/

        /*		}*/

        /*	label {*/
        /*		color: #555;*/
        /*		display: block;*/
        /*		font-size: 0.9em;*/
        /*		font-weight: 600;*/
        /*		margin: 0 0 1em 0;*/
        /*	}*/

        /*	input[type="text"],*/
        /*	input[type="password"],*/
        /*	input[type="email"],*/
        /*	input[type="tel"],*/
        /*	select,*/
        /*	textarea {*/
        /*		-moz-appearance: none;*/
        /*		-webkit-appearance: none;*/
        /*		-ms-appearance: none;*/
        /*		appearance: none;*/
        /*		background: #6cc091;*/
        /*		border-radius: 10px;*/
        /*		border: none;*/
        /*		border: solid 2px #8dcca9;*/
        /*		color: #fff;*/
        /*		display: block;*/
        /*		outline: 0;*/
        /*		padding: 0 1em;*/
        /*		text-decoration: none;*/
        /*		width: 100%;*/
        /*	}*/

        /*		input[type="text"]:invalid,*/
        /*		input[type="password"]:invalid,*/
        /*		input[type="email"]:invalid,*/
        /*		input[type="tel"]:invalid,*/
        /*		select:invalid,*/
        /*		textarea:invalid {*/
        /*			box-shadow: none;*/
        /*		}*/

        /*		input[type="text"]:focus,*/
        /*		input[type="password"]:focus,*/
        /*		input[type="email"]:focus,*/
        /*		input[type="tel"]:focus,*/
        /*		select:focus,*/
        /*		textarea:focus {*/
        /*			border-color: #4bae77;*/
        /*			box-shadow: 0 0 0 1px #4bae77;*/
        /*		}*/

        /*	.select-wrapper {*/
        /*		text-decoration: none;*/
        /*		display: block;*/
        /*		position: relative;*/
        /*	}*/

        /*		.select-wrapper:before {*/
        /*			content: "";*/
        /*			-moz-osx-font-smoothing: grayscale;*/
        /*			-webkit-font-smoothing: antialiased;*/
        /*			font-family: FontAwesome;*/
        /*			font-style: normal;*/
        /*			font-weight: normal;*/
        /*			text-transform: none !important;*/
        /*		}*/

        /*		.select-wrapper:before {*/
        /*			color: #fff;*/
        /*			display: block;*/
        /*			height: 2.75em;*/
        /*			line-height: 2.75em;*/
        /*			pointer-events: none;*/
        /*			position: absolute;*/
        /*			right: 0;*/
        /*			text-align: center;*/
        /*			top: 0;*/
        /*			width: 2.75em;*/
        /*		}*/

        /*		.select-wrapper select::-ms-expand {*/
        /*			display: none;*/
        /*		}*/

        /*	input[type="text"],*/
        /*	input[type="password"],*/
        /*	input[type="email"],*/
        /*	select {*/
        /*		height: 2.75em;*/
        /*	}*/

        /*	textarea {*/
        /*		padding: 0.75em 1em;*/
        /*	}*/

        /*	input[type="checkbox"],*/
        /*	input[type="radio"] {*/
        /*		-moz-appearance: none;*/
        /*		-webkit-appearance: none;*/
        /*		-ms-appearance: none;*/
        /*		appearance: none;*/
        /*		display: block;*/
        /*		float: left;*/
        /*		margin-right: -2em;*/
        /*		opacity: 0;*/
        /*		width: 1em;*/
        /*		z-index: -1;*/
        /*	}*/

        /*		input[type="checkbox"] + label,*/
        /*		input[type="radio"] + label {*/
        /*			text-decoration: none;*/
        /*			color: #9a9a9a;*/
        /*			cursor: pointer;*/
        /*			display: inline-block;*/
        /*			font-size: 1em;*/
        /*			font-weight: 400;*/
        /*			padding-left: 2.4em;*/
        /*			padding-right: 0.75em;*/
        /*			position: relative;*/
        /*		}*/

        /*			input[type="checkbox"] + label:before,*/
        /*			input[type="radio"] + label:before {*/
        /*				-moz-osx-font-smoothing: grayscale;*/
        /*				-webkit-font-smoothing: antialiased;*/
        /*				font-family: FontAwesome;*/
        /*				font-style: normal;*/
        /*				font-weight: normal;*/
        /*				text-transform: none !important;*/
        /*			}*/

        /*			input[type="checkbox"] + label:before,*/
        /*			input[type="radio"] + label:before {*/
        /*				background: rgba(144, 144, 144, 0.075);*/
        /*				border-radius: 0;*/
        /*				border: solid 1px #8dcca9;*/
        /*				content: '';*/
        /*				display: inline-block;*/
        /*				height: 1.65em;*/
        /*				left: 0;*/
        /*				line-height: 1.58125em;*/
        /*				position: absolute;*/
        /*				text-align: center;*/
        /*				top: 0;*/
        /*				width: 1.65em;*/
        /*			}*/

        /*		input[type="checkbox"]:checked + label:before,*/
        /*		input[type="radio"]:checked + label:before {*/
        /*			background: #6cc091;*/
        /*			border-color: #6cc091;*/
        /*			color: #ffffff;*/
        /*			content: '\f00c';*/
        /*		}*/

        /*		input[type="checkbox"]:focus + label:before,*/
        /*		input[type="radio"]:focus + label:before {*/
        /*			border-color: #6cc091;*/
        /*			box-shadow: 0 0 0 1px #6cc091;*/
        /*		}*/

        /*	input[type="checkbox"] + label:before {*/
        /*		border-radius: 0;*/
        /*	}*/

        /*	input[type="radio"] + label:before {*/
        /*		border-radius: 100%;*/
        /*	}*/

        /*	::-webkit-input-placeholder {*/
        /*		color: #c4e5d3 !important;*/
        /*		opacity: 1.0;*/
        /*	}*/

        /*	:-moz-placeholder {*/
        /*		color: #c4e5d3 !important;*/
        /*		opacity: 1.0;*/
        /*	}*/

        /*	::-moz-placeholder {*/
        /*		color: #c4e5d3 !important;*/
        /*		opacity: 1.0;*/
        /*	}*/

        /*	:-ms-input-placeholder {*/
        /*		color: #c4e5d3 !important;*/
        /*		opacity: 1.0;*/
        /*	}*/

        /*	.formerize-placeholder {*/
        /*		color: #c4e5d3 !important;*/
        /*		opacity: 1.0;*/
        /*	}*/

        /* Box */

        .box {
            border: solid 1px #dbdbdb;
            margin-bottom: 2em;
            padding: 1.5em;
        }

        .box> :last-child,
        .box> :last-child> :last-child,
        .box> :last-child> :last-child> :last-child {
            margin-bottom: 0;
        }

        .box.alt {
            border: 0;
            border-radius: 0;
            padding: 0;
        }

        .box.person {
            border: solid 1px #8dcca9;
            padding: 3em 1.5em;
        }

        .box.person h3 {
            margin: 0;
        }

        .box.person .image {
            margin-bottom: 1em;
        }

        .box.person .image img {
            max-width: 100%;
        }

        /* Icon */

        .icon {
            text-decoration: none;
            border-bottom: none;
            position: relative;
        }

        .icon:before {
            -moz-osx-font-smoothing: grayscale;
            -webkit-font-smoothing: antialiased;
            font-family: FontAwesome;
            font-style: normal;
            font-weight: normal;
            text-transform: none !important;
        }

        .icon>.label {
            display: none;
        }

        /* Image */

        .image {
            border-radius: 0;
            border: 0;
            display: inline-block;
            position: relative;
        }

        .image img {
            border-radius: 0;
            display: block;
        }

        .image.left,
        .image.right {
            max-width: 40%;
        }

        .image.left img,
        .image.right img {
            width: 100%;
        }

        .image.round img {
            border-radius: 100%;
        }

        .image.left {
            float: left;
            padding: 0 1.5em 1em 0;
            top: 0.25em;
        }

        .image.right {
            float: right;
            padding: 0 0 1em 1.5em;
            top: 0.25em;
        }

        .image.fit {
            display: block;
            margin: 0 0 2em 0;
            width: 100%;
        }

        .image.fit img {
            width: 100%;
        }

        .image.main {
            display: block;
            margin: 0 0 3em 0;
            width: 100%;
        }

        .image.main img {
            width: 100%;
        }

        /* List */

        ol {
            list-style: decimal;
            margin: 0 0 2em 0;
            padding-left: 1.25em;
        }

        ol li {
            padding-left: 0.25em;
        }

        ul {
            list-style: disc;
            margin: 0 0 2em 0;
            padding-left: 1em;
        }

        ul li {
            padding-left: 0.5em;
        }

        ul.alt {
            list-style: none;
            padding-left: 0;
        }

        ul.alt li {
            border-top: solid 1px #dbdbdb;
            padding: 0.5em 0;
        }

        ul.alt li:first-child {
            border-top: 0;
            padding-top: 0;
        }

        ul.alt.dark li {
            border-top: solid 1px rgba(0, 0, 0, 0.25);
        }

        ul.icons {
            cursor: default;
            list-style: none;
            padding-left: 0;
        }

        ul.icons li {
            display: inline-block;
            padding: 0 1em 0 0;
        }

        ul.icons li:last-child {
            padding-right: 0;
        }

        ul.icons li .icon:before {
            font-size: 2em;
        }

        ul.actions {
            cursor: default;
            list-style: none;
            padding-left: 0;
        }

        ul.actions li {
            display: inline-block;
            padding: 0 1em 0 0;
            vertical-align: middle;
        }

        ul.actions li:last-child {
            padding-right: 0;
        }

        ul.actions.small li {
            padding: 0 0.5em 0 0;
        }

        ul.actions.vertical li {
            display: block;
            padding: 1em 0 0 0;
        }

        ul.actions.vertical li:first-child {
            padding-top: 0;
        }

        ul.actions.vertical li>* {
            margin-bottom: 0;
        }

        ul.actions.vertical.small li {
            padding: 0.5em 0 0 0;
        }

        ul.actions.vertical.small li:first-child {
            padding-top: 0;
        }

        ul.actions.fit {
            display: table;
            margin-left: -1em;
            padding: 0;
            table-layout: fixed;
            width: calc(100% + 1em);
        }

        ul.actions.fit li {
            display: table-cell;
            padding: 0 0 0 1em;
        }

        ul.actions.fit li>* {
            margin-bottom: 0;
        }

        ul.actions.fit.small {
            margin-left: -0.5em;
            width: calc(100% + 0.5em);
        }

        ul.actions.fit.small li {
            padding: 0 0 0 0.5em;
        }

        @media screen and (max-width: 480px) {

            ul.actions {
                margin: 0 0 2em 0;
            }

            ul.actions li {
                padding: 1em 0 0 0;
                display: block;
                text-align: center;
                width: 100%;
            }

            ul.actions li:first-child {
                padding-top: 0;
            }

            ul.actions li>* {
                width: 100%;
                margin: 0 !important;
            }

            ul.actions li>*.icon:before {
                margin-left: -2em;
            }

            ul.actions.small li {
                padding: 0.5em 0 0 0;
            }

            ul.actions.small li:first-child {
                padding-top: 0;
            }

        }

        dl {
            margin: 0 0 2em 0;
        }

        dl dt {
            display: block;
            font-weight: 600;
            margin: 0 0 1em 0;
        }

        dl dd {
            margin-left: 2em;
        }



        /* Button */

        input[type="submit"],
        input[type="reset"],
        input[type="button"],
        button,
        .button {
            -moz-appearance: none;
            -webkit-appearance: none;
            -ms-appearance: none;
            appearance: none;
            -moz-transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out;
            -webkit-transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out;
            -ms-transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out;
            transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out;
            background-color: transparent;
            box-shadow: inset 0 0 0 3px #6cc091;
            color: #6cc091 !important;
            border-radius: 30px;
            border: 0;
            cursor: pointer;
            display: inline-block;
            font-size: .75em;
            font-weight: 400;
            height: 3.75em;
            line-height: 3.85em;
            letter-spacing: 2px;
            padding: 0 4em;
            text-align: center;
            text-decoration: none;
            text-transform: uppercase;
            white-space: nowrap;
        }

        input[type="submit"]:hover,
        input[type="reset"]:hover,
        input[type="button"]:hover,
        button:hover,
        .button:hover {
            background-color: rgba(108, 192, 145, 0.15);
        }

        input[type="submit"]:active,
        input[type="reset"]:active,
        input[type="button"]:active,
        button:active,
        .button:active {
            background-color: rgba(108, 192, 145, 0.15);
        }

        input[type="submit"].icon,
        input[type="reset"].icon,
        input[type="button"].icon,
        button.icon,
        .button.icon {
            padding-left: 1.35em;
        }

        input[type="submit"].icon:before,
        input[type="reset"].icon:before,
        input[type="button"].icon:before,
        button.icon:before,
        .button.icon:before {
            margin-right: 0.5em;
        }

        input[type="submit"].fit,
        input[type="reset"].fit,
        input[type="button"].fit,
        button.fit,
        .button.fit {
            display: block;
            margin: 0 0 1em 0;
            width: 100%;
        }

        input[type="submit"].small,
        input[type="reset"].small,
        input[type="button"].small,
        button.small,
        .button.small {
            font-size: 0.8em;
        }

        input[type="submit"].big,
        input[type="reset"].big,
        input[type="button"].big,
        button.big,
        .button.big {
            font-size: 1.35em;
        }

        input[type="submit"].alt,
        input[type="reset"].alt,
        input[type="button"].alt,
        button.alt,
        .button.alt {
            background-color: transparent;
            box-shadow: inset 0 0 0 3px #FFF;
            color: #fff !important;
        }

        input[type="submit"].alt:hover,
        input[type="reset"].alt:hover,
        input[type="button"].alt:hover,
        button.alt:hover,
        .button.alt:hover {
            background-color: #7ec89e;
        }

        input[type="submit"].alt:active,
        input[type="reset"].alt:active,
        input[type="button"].alt:active,
        button.alt:active,
        .button.alt:active {
            background-color: #7ec89e;
        }

        input[type="submit"].alt.icon:before,
        input[type="reset"].alt.icon:before,
        input[type="button"].alt.icon:before,
        button.alt.icon:before,
        .button.alt.icon:before {
            color: #bbb;
        }

        input[type="submit"].special,
        input[type="reset"].special,
        input[type="button"].special,
        button.special,
        .button.special {
            background-color: #6cc091;
            color: #ffffff !important;
        }

        input[type="submit"].special:hover,
        input[type="reset"].special:hover,
        input[type="button"].special:hover,
        button.special:hover,
        .button.special:hover {
            background-color: #7ec89e;
        }

        input[type="submit"].special:active,
        input[type="reset"].special:active,
        input[type="button"].special:active,
        button.special:active,
        .button.special:active {
            background-color: #5ab884;
        }

        input[type="submit"].disabled,
        input[type="submit"]:disabled,
        input[type="reset"].disabled,
        input[type="reset"]:disabled,
        input[type="button"].disabled,
        input[type="button"]:disabled,
        button.disabled,
        button:disabled,
        .button.disabled,
        .button:disabled {
            background-color: #9a9a9a !important;
            box-shadow: inset 0 -0.15em 0 0 rgba(0, 0, 0, 0.15);
            color: #fff !important;
            cursor: default;
            opacity: 0.25;
        }

        @media screen and (max-width: 480px) {

            input[type="submit"],
            input[type="reset"],
            input[type="button"],
            button,
            .button {
                padding: 0;
                width: 100%;
            }

        }

        /* Header */

        .subpage {
            padding-top: 44px;
        }

        .subpage #header {
            background: #6cc091;
            top: 0;
            height: 44px;
            line-height: 44px;
            position: fixed;
        }

        #header {
            color: #fff;
            cursor: default;
            height: 3.25em;
            left: 0;
            line-height: 3.25em;
            position: absolute;
            text-align: right;
            top: 2em;
            width: 100%;
            z-index: 10001;
        }

        #header .inner {
            margin: 0 auto;
            position: relative;
        }

        #header .logo {
            color: #ffffff;
            display: inline-block;
            font-weight: 400;
            height: inherit;
            left: 0;
            line-height: inherit;
            margin: 0;
            padding: 0;
            position: absolute;
            top: 0;
            font-size: 1em;
        }

        #header .logo strong {
            color: #ffffff;
            font-weight: 600;
        }

        #header a {
            -moz-transition: color 0.2s ease-in-out;
            -webkit-transition: color 0.2s ease-in-out;
            -ms-transition: color 0.2s ease-in-out;
            transition: color 0.2s ease-in-out;
            display: inline-block;
            padding: 0 0.75em;
            color: inherit;
            text-decoration: none;
            font-size: 1em;
        }

        #header a:hover {
            color: #ffffff;
        }

        #header a:last-child {
            padding-right: 0;
        }

        #header a.navPanelToggle {
            display: none;
            text-decoration: none;
            height: 4em;
            width: 4em;
            z-index: 10003;
        }

        #header a.navPanelToggle .fa {
            font-size: 1.25em;
        }

        @media screen and (max-width: 980px) {

            #header a.navPanelToggle {
                display: inline-block;
            }

        }

        @media screen and (max-width: 736px) {

            #header a {
                padding: 0 0.5em;
            }

        }

        @media screen and (max-width: 980px) {

            #header {
                top: 1em;
            }

        }

        @media screen and (max-width: 736px) {

            #header {
                top: .5em;
            }

        }

        @media screen and (max-width: 480px) {

            #header {
                font-size: .9em;
            }

        }

        /* Nav */

        @media screen and (max-width: 980px) {

            #nav {
                display: none;
            }

        }

        #navPanel {
            -moz-transform: translatex(20em);
            -webkit-transform: translatex(20em);
            -ms-transform: translatex(20em);
            transform: translatex(20em);
            -moz-transition: -moz-transform 0.2s ease-in-out, visibility 0.2s ease-in-out;
            -webkit-transition: -webkit-transform 0.2s ease-in-out, visibility 0.2s ease-in-out;
            -ms-transition: -ms-transform 0.2s ease-in-out, visibility 0.2s ease-in-out;
            transition: transform 0.2s ease-in-out, visibility 0.2s ease-in-out;
            -webkit-overflow-scrolling: touch;
            visibility: hidden;
            overflow-y: auto;
            position: fixed;
            right: 0;
            top: 0;
            background: #6cc091;
            color: #daefe3;
            height: 100%;
            max-width: 80%;
            width: 20em;
            padding: 0.5em 1.25em;
            z-index: 10010;
        }

        #navPanel.visible {
            -moz-transform: translatex(0);
            -webkit-transform: translatex(0);
            -ms-transform: translatex(0);
            transform: translatex(0);
            box-shadow: 0 0 1.5em 0 rgba(0, 0, 0, 0.2);
            visibility: visible;
        }

        #navPanel a:not(.close) {
            border-top: solid 1px #8dcca9;
            color: #daefe3;
            font-weight: 600;
            display: block;
            padding: 0.75em 0;
            text-decoration: none;
            font-weight: 400;
        }

        #navPanel a:not(.close):first-child {
            border: none;
        }

        #navPanel .close {
            text-decoration: none;
            -moz-transition: color 0.2s ease-in-out;
            -webkit-transition: color 0.2s ease-in-out;
            -ms-transition: color 0.2s ease-in-out;
            transition: color 0.2s ease-in-out;
            -webkit-tap-highlight-color: transparent;
            border: 0;
            color: #daefe3;
            cursor: pointer;
            display: block;
            height: 4em;
            padding-right: 1.25em;
            position: absolute;
            right: 0;
            text-align: right;
            top: 0;
            vertical-align: middle;
            width: 5em;
        }

        #navPanel .close:before {
            -moz-osx-font-smoothing: grayscale;
            -webkit-font-smoothing: antialiased;
            font-family: FontAwesome;
            font-style: normal;
            font-weight: normal;
            text-transform: none !important;
            content: '\f00d';
            width: 3em;
            height: 3em;
            line-height: 3em;
            display: block;
            position: absolute;
            right: 0;
            top: 0;
            text-align: center;
        }

        #navPanel .close:hover {
            color: inherit;
        }

        /* Banner */

        #banner {
            padding: 8em 0 9em 0;
            background-image: url(./images/banner.jpg);
            background-size: cover;
            background-position: bottom;
            background-attachment: fixed;
            background-repeat: no-repeat;
            text-align: center;
            position: relative;
        }

        #banner:before {
            content: '';
            background: rgba(75, 75, 93, 0.85);
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
        }

        #banner .inner {
            border-top: 2px solid rgba(255, 255, 255, 0.2);
            position: relative;
            z-index: 10005;
            padding-top: 8em;
        }

        #banner h1 {
            font-size: 3.5em;
            font-weight: 400;
            color: #fff;
            line-height: 1em;
            margin: 0 0 1em 0;
            padding: 0;
        }

        #banner h3 {
            font-weight: 400;
            color: #fff;
            margin: 0;
            font-size: 1.5em;
        }

        #banner .icon {
            color: #6cc091;
            font-size: 2em;
        }

        #banner p {
            font-size: 1em;
            color: rgba(255, 255, 255, 0.55);
            margin-bottom: 1.75em;
        }

        #banner .flex {
            -ms-flex-pack: center;
            -moz-justify-content: center;
            -webkit-justify-content: center;
            -ms-justify-content: center;
            justify-content: center;
            text-align: center;
            margin: 0 auto 4em auto;
        }

        #banner .flex div {
            border-right: 2px solid rgba(255, 255, 255, 0.2);
            padding: 0 8em;
        }

        #banner .flex div:last-child {
            border: none;
            padding-right: 0;
        }

        #banner .flex div:first-child {
            padding-left: 0;
        }

        #banner .flex div p {
            margin: 0;
        }

        @media only screen and (min-device-width: 768px) and (max-device-width: 1024px) and (orientation: landscape) {

            #banner {
                background-attachment: scroll;
            }

        }

        @media screen and (max-width: 1680px) {

            #banner .flex div {
                padding: 0 6em;
            }

        }

        @media screen and (max-width: 1280px) {

            #banner {
                padding: 7em 0 6em 0;
            }

            #banner .inner {
                padding-top: 6em;
            }

            #banner h1 {
                font-size: 3em;
            }

            #banner h3 {
                font-size: 1.25em;
            }

            #banner .flex div {
                padding: 0 3em;
            }

        }

        @media screen and (max-width: 980px) {

            #banner {
                background-attachment: scroll;
                padding: 5em 0 4em 0;
            }

            #banner .inner {
                padding-top: 4em;
            }

            #banner h1 {
                font-size: 2.5em;
            }

            #banner h3 {
                font-size: 1.25em;
            }

            #banner .flex div {
                font-size: .85em;
                padding: 0 1.5em;
            }

        }

        @media screen and (max-width: 736px) {

            #banner {
                padding: 4em 0 3em 0;
            }

            #banner .inner {
                padding-top: 3em;
            }

            #banner h1 {
                font-size: 2em;
            }

            #banner h3 {
                font-size: 1.25em;
            }

            #banner .flex {
                -moz-flex-direction: column;
                -webkit-flex-direction: column;
                -ms-flex-direction: column;
                flex-direction: column;
                margin: 0 auto 2em auto;
            }

            #banner .flex div {
                font-size: .85em;
                padding: 0;
                border: none;
                margin-bottom: 1em;
            }

        }

        @media screen and (max-width: 480px) {

            #banner h1 {
                font-size: 1.5em;
            }

        }

        /* Footer */

        #footer {
            padding: 6em 0;
            background: #6cc091;
            color: #fff;
            text-align: center;
        }

        #footer h3 {
            color: #FFF;
            margin-bottom: 2em !important;
        }

        #footer label {
            text-align: left;
            color: #FFF;
        }

        #footer .copyright {
            color: rgba(255, 255, 255, 0.5);
            font-size: 0.8em;
            margin: 0 0 2em 0;
            padding: 0;

        }

        #footer .copyright a {
            color: rgba(255, 255, 255, 0.5);
            text-decoration: none;
        }

        #footer .copyright a:hover {
            color: #FFF;
        }

        @media screen and (max-width: 980px) {

            #footer {
                padding: 4em 0;
            }

        }

        @media screen and (max-width: 736px) {

            #footer {
                padding: 3em 0;
            }

        }
    </style>
    <style>
        /*   input{*/
        /*         width: 65%;*/

        /*    }*/
        /*     select{*/
        /*         width: 65%;*/

        /*     }*/
        /*     body{*/
        /*         background-color:#6cc091;*/
        /*     }*/
        .container {
            /*background-color:red;*/
            width: 50%;

        }


        /*     @media only screen and (max-width: 768px) {*/
        /*  .container {*/
        /*    padding: 5px 7px;*/
        /*    min-width: 30px;*/
        /*  }*/
        /*  .container:after,*/
        /*  .container:before {*/
        /*    border-bottom-width: 12.5px;*/
        /*    border-right-width: 12.5px;*/
        /*    bottom: -12.5px;*/
        /*    right: 12.5px;*/
        /*  }*/
        /*  .container:before {*/
        /*    border-right-width: 12.5px;*/
        /*    bottom: -14px;*/
        /*    right: 11px;*/
        /*  }*/
        /*}*/
        /*.container {*/
        /*position: fixed;   */
        /*   top: 50%;*/
        /*   left: 50%;*/
        /*   transform: translate(-50%, -50%);*/
        /*}*/

        /*#frmajax {*/
        /*   position: absolute;*/
        /*   top: 50%;*/
        /*   left: 50%;*/
        /*   transform: translate(-50%, -50%);*/
        /*}*/
    </style>
    <!--llenar form para actuvar boton enviar-->
    <style>
        .fecdeentrega,
        .fecdesalida {
            /*background: #303F9F;*/
            border-radius: 1px;
            border: 2px solid #f2f2f2;
            color: #fff;
            cursor: pointer;
            display: inline-block;
            font-family: "Roboto";
            font-size: 16px;
            padding: 15px;
            width: 100%;
            -webkit-transition: all 0.3s ease;
            -o-transition: all 0.3s ease;
            transition: all 0.3s ease;
        }

        /*.contenedor-formulario .formulario input[type="date"]:hover {*/
        /*  background: #1976D2; }*/

        }
    </style>
    <style>
        #dnisolicitante::placeholder {
            font-size: 2.4vh;
            color: #303F9F;

        }

        #celularsolicitante::placeholder {
            font-size: 2.4vh;

            color: #303F9F;
        }

        #correosolicitante::placeholder {
            font-size: 2.4vh;
            color: #303F9F;
        }


        label.label {}

        }
    </style>

    <script language="javascript">
        btnguardar = "";
        function activar(formulario, btnguardar) {
            cont = 0;
            for (i = 0; i < formulario.elements.length; i++) {
                if (formulario.elements[i].value != "") {
                    cont = cont + 1;
                }
                if (btnguardar == "") {
                    if (formulario.elements[i].type == "submit") {
                        btnguardar = formulario.elements[i].name;
                    }
                }
            }
            if (cont == formulario.elements.length) {
                formulario.btnguardar.disabled = false;
            } else {
                formulario.btnguardar.disabled = true;
            }
        }
    </script>

</head>

<body>
    <!-- Header -->
    <header id="header">
        <div class="inner">
            <!-- <a href="index.html" class="logo"><strong>Projection</strong> by TEMPLATED</a> -->
            <nav id="nav">
                <a href="index.php">Home</a>
                <a href="">Nosotros</a>
                <a href="">Contáctenos</a>
            </nav>
            <a href="#navPanel" class="navPanelToggle"><span class="fa fa-bars"></span></a>
        </div>
    </header>

    <!-- Banner -->
    <section id="banner">
        <div class="inner">
            <header>
                <h1>BIENVENIDO JUAN PABLO RIVERA </h1>
            </header>

            <div class="flex ">

                <div>
                    <span class="icon fa-truck"></span>
                    <h3>A donde Vamos</h3>
                    <p></p>
                </div>

                <div>
                    <span class="icon fa-lock"></span>
                    <h3>Seguridad</h3>
                    <p>Unidades monitoreadas 24/7 </p>
                </div>

                <div>
                    <span class="icon fa-road"></span>
                    <h3>Filosofía</h3>
                    <p></p>
                </div>

            </div>

            <footer>
                <!--<a href="#" class="button">Cerrar Sesión</a>-->
                <a class="button" href="../salir.php">Cerrar Sesión</a>
            </footer>
        </div>
    </section>


    <!-- Three -->
    <section id="three" class="wrapper align-center">
        <header>

        </header>
       
        <h3>FORMULARIO DE REGISTRO</h3>


        <!--<div class="main">-->

        <!--   <section class="signup">-->
        <!--      <img src="images/signup-bg.jpg" alt=""> -->
        <!--     <div class="container">-->
        <!--       <div class="signup-content">-->
        <?php
 
if( isset($_POST['generar_contenido']) ){ //Si se pulso el boton 'generar_contenido' ..
if(empty($_POST['dir' ] ) ){ // Si esta vacio el campo 'anio' entonces damos un mensaje de error.
// echo "<h2>Por favor rellene el formulario</h2>";
// echo "<a href='index.php'><input type='submit' value='Back'/></a>";
echo "Por favor rellene el formulario
<a href='index.php'><input type='submit' value='Back'/></a>";

}

else if(empty($_POST['fecdeentrega']) ){ // Si esta vacio el campo 'mes' entonces damos un mensaje de error.
echo "Por favor escriba el fecdeentrega
<a href='index.php'><input type='submit' value='Back'/></a>";
}
else if(empty($_POST['fecdesalida']) ){ // Si esta vacio el campo 'mes' entonces damos un mensaje de error.
echo "Por favor escriba el fecdesalida 
<a href='index.php'><input type='submit' value='Back'/></a>";
}
else if(empty($_POST['fecprogpdi']) ){ // Si esta vacio el campo 'mes' entonces damos un mensaje de error.
echo "Por favor escriba el fecprogpdi 
<a href='index.php'><input type='submit' value='Back'/></a>";
}
else if(empty($_POST['cliente']) ){ // Si esta vacio el campo 'mes' entonces damos un mensaje de error.
echo "Por favor escriba el cliente
<a href='index.php'><input type='submit' value='Back'/></a>";
}
else if(empty($_POST['ruc']) ){ // Si esta vacio el campo 'mes' entonces damos un mensaje de error.
echo "Por favor escriba el ruc
<a href='index.php'><input type='submit' value='Back'/></a>";
}

else if(empty($_POST['origen']) ){ // Si esta vacio el campo 'mes' entonces damos un mensaje de error.
echo "Por favor escriba el origen
<a href='index.php'><input type='submit' value='Back'/></a>";
}
else if(empty($_POST['destino']) ){ // Si esta vacio el campo 'mes' entonces damos un mensaje de error.
echo "Por favor escriba el destino
<a href='index.php'><input type='submit' value='Back'/></a>";
}

else if(empty($_POST['marca']) ){ // Si esta vacio el campo 'mes' entonces damos un mensaje de error.
echo "Por favor escriba la marca
<a href='index.php'><input type='submit' value='Back'/></a>";
}
else if(empty($_POST['modelo']) ){ // Si esta vacio el campo 'mes' entonces damos un mensaje de error.
echo "Por favor escriba el modelo 
<a href='index.php'><input type='submit' value='Back'/></a>";
}
else if(empty($_POST['color']) ){ // Si esta vacio el campo 'mes' entonces damos un mensaje de error.
echo "Por favor escriba el color
<a href='index.php'><input type='submit' value='Back'/></a>";
}
else if(empty($_POST['vin']) ){ // Si esta vacio el campo 'mes' entonces damos un mensaje de error.
echo "Por favor escriba el vin
<a href='index.php'><input type='submit' value='Back'/></a>";
}
else if(empty($_POST['concesionario']) ){ // Si esta vacio el campo 'mes' entonces damos un mensaje de error.
echo "Por favor escriba el concesionario
<a href='index.php'><input type='submit' value='Back'/></a>";
}


else if(empty($_POST['numdeguia']) ){ // Si esta vacio el campo 'mes' entonces damos un mensaje de error.
// echo "Por favor escriba el numero de guia";
}
else if(empty($_POST['nombresolicitante']) ){ // Si esta vacio el campo 'mes' entonces damos un mensaje de error.
// echo "Por favor escriba el numero de guia";
}
else if(empty($_POST['dnisolicitante']) ){ // Si esta vacio el campo 'mes' entonces damos un mensaje de error.
// echo "Por favor escriba el numero de guia";
}
else if(empty($_POST['celularsolicitante']) ){ // Si esta vacio el campo 'mes' entonces damos un mensaje de error.
// echo "Por favor escriba el numero de guia";
}
else if(empty($_POST['correosolicitante']) ){ // Si esta vacio el campo 'mes' entonces damos un mensaje de error.
// echo "Por favor escriba el numero de guia";


}





else{
?>

        <center>
            <!--  <div class="main">-->

            <!--    <section class="signup">-->
            <!-- <img src="images/signup-bg.jpg" alt=""> -->
            <!--      <div class="container">-->
            <!--        <div class="signup-content">-->
            <!--            <div class="contenedor-formulario">-->
            <!--<div class="wrap">-->
            <div class="wrap" id="muestra">
                <h1></h1>
                <table id="muestra" class="tabla">
                    <tr>
                        <td>
                            DIRECCIÓN:
                        </td>
                        <td>
                            <?php echo htmlentities($_POST['dir']); //Imprimimos el dir  generada en el form. ?>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            FEC DE ENTREGA:
                        </td>
                        <td>
                            <?php echo htmlentities($_POST['fecdeentrega']); //Imprimimos la fecdeentrega generada en el form. ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            FECHA DE SALIDA:
                        </td>
                        <td>
                            <?php echo htmlentities($_POST['fecdesalida']); //Imprimimos la fecdesalida generada en el form. ?>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            CLIENTE:
                        </td>
                        <td>
                            <?php echo htmlentities($_POST['cliente']); //Imprimimos el cliente generada en el form. ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            RUC:
                        </td>
                        <td>
                            <?php echo htmlentities($_POST['ruc']); //Imprimimos ruc generada en el form. ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            ORIGEN:
                        </td>
                        <td>
                            <?php echo htmlentities($_POST['origen']); //Imprimimos origen generada en el form. ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            DESTINO:
                        </td>
                        <td>
                            <?php echo htmlentities($_POST['destino']); //Imprimimos el destino generada en el form. ?>
                        </td>
                    </tr>

                    </tr>

                    <tr>
                        <td>
                            MARCA:
                        </td>
                        <td>
                            <?php echo htmlentities($_POST['marca']); //Imprimimos la marca generada en el form. ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            MODELO:
                        </td>
                        <td>
                            <?php echo htmlentities($_POST['modelo']); //Imprimimos el modelo generada en el form. ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            COLOR:
                        </td>
                        <td>
                            <?php echo htmlentities($_POST['color']); //Imprimimos el color generada en el form. ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            VIN:
                        </td>
                        <td>
                            <?php echo htmlentities($_POST['vin']); //Imprimimos el vin generada en el form. ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            CONCESIONARIO:
                        </td>
                        <td>
                            <?php echo htmlentities($_POST['concesionario']); //Imprimimos el concesionario generada en el form. ?>
                        </td>
                    </tr>


                    <tr>
                        <td>
                            NOMBRE SOLICITANTE:
                        </td>
                        <td>
                            <?php echo htmlentities($_POST['nombresolicitante']); //Imprimimos el concesionario generada en el form. ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            DNI SOLICITANTE:
                        </td>
                        <td>
                            <?php echo htmlentities($_POST['dnisolicitante']); //Imprimimos el concesionario generada en el form. ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            CELULAR SOLICITANTE:
                        </td>
                        <td>
                            <?php echo htmlentities($_POST['celularsolicitante']); //Imprimimos el concesionario generada en el form. ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            CORREO SOLICITANTE:
                        </td>
                        <td>
                            <?php echo htmlentities($_POST['correosolicitante']); //Imprimimos el concesionario generada en el form. ?>
                        </td>
                    </tr>

                    <!--<input type="submit" name="submit" class="form-submit" value="Enviar" /> <input class="form-submit" type="reset" />-->


                    <tr>
                        <td>
                            NÚMERO DE GUÍA:
                        </td>
                        <td>
                            <?php echo htmlentities($_POST['numdeguia']); //Imprimimos el concesionario generada en el form. ?>
                        </td>
                    </tr>



                </table>
            </div>
            </br>
            <input type='button' onclick="javascript:imprim2();" value='Imprimir' />
            <!--<a href='index.php'><input type='submit' value='Back' /></a>-->

            <a href='index.php'><input type='submit' value='Nuevo Registro' /></a>


            </div>
            </div>

            <script>
                function imprim2() {
                    var mywindow = window.open('', 'PRINT', 'height=400,width=600');
                    mywindow.document.write('<html><head>');
                    mywindow.document.write('<style>.tabla{width:100%;border-collapse:collapse;margin:16px 0 16px 0;}.tabla th{border:1px solid #ddd;padding:4px;background-color:#d4eefd;text-align:left;font-size:15px;}.tabla td{border:1px solid #ddd;text-align:left;padding:6px;}</style>');
                    mywindow.document.write('</head><body >');
                    mywindow.document.write(document.getElementById('muestra').innerHTML);
                    mywindow.document.write('</body></html>');
                    mywindow.document.close(); // necesario para IE >= 10
                    mywindow.focus(); // necesario para IE >= 10
                    mywindow.print();
                    mywindow.close();
                    return true;
                }
            </script>


    </section>

    </div>
    <br>

    </center>
    <?php
}
}else{
?>
    <center>
    <?php
include('imprime.php');

?>
       
</center>
<?php
} //Fin del codigo
/*
*/
?>
</div>
</div>
</div>
</div>


</section>

</div>
</section>

<!-- Footer -->
<!--	<footer id="footer">-->
<!--		<div class="inner">-->

<!--			<h3>Get in touch</h3>-->

<!--			<form action="#" method="post">-->

<!--				<div class="field half first">-->
<!--					<label for="name">Name</label>-->
<!--					<input name="name" id="name" type="text" placeholder="Name">-->
<!--				</div>-->
<!--				<div class="field half">-->
<!--					<label for="email">Email</label>-->
<!--					<input name="email" id="email" type="email" placeholder="Email">-->
<!--				</div>-->
<!--				<div class="field">-->
<!--					<label for="message">Message</label>-->
<!--					<textarea name="message" id="message" rows="6" placeholder="Message"></textarea>-->
<!--				</div>-->
<!--				<ul class="actions">-->
<!--					<li><input value="Send Message" class="button alt" type="submit"></li>-->
<!--				</ul>-->
<!--			</form>-->

<!--			<div class="copyright">-->
<!--				&copy; Untitled. Design: <a href="https://templated.co">TEMPLATED</a>. Images: <a href="https://unsplash.com">Unsplash</a>.-->
<!--			</div>-->

<!--		</div>-->
<!--	</footer>-->

<!-- Scripts -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/skel.min.js"></script>
<script src="assets/js/util.js"></script>
<script src="assets/js/main.js"></script>
<!-- JS -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/jquery-ui/jquery-ui.min.js"></script>
<script src="vendor/jquery-validation/dist/jquery.validate.min.js"></script>
<script src="vendor/jquery-validation/dist/additional-methods.min.js"></script>
<script src="js/main.js"></script>
<script src="js/formulario.js"></script>

</body>

</html>
<!--CONEXION-->
<script type="text/javascript">
    $(document).ready(function () {
        $('#btnguardar').click(function () {
            var datos = $('#frmajax').serialize();
            $.ajax({
                type: "POST",
                url: "connect_db.php",
                data: datos,
                success: function (r) {
                    if (r == 1) {
                        alert("Gracias, el formulario ha sido enviado con éxito");
                    } else {
                        alert("Fallo el server");
                    }
                }
            });

            return false;
        });
    });
</script>



<!--<p><input id="target" name="target" type="checkbox" value="Downloaded our stuff before?" /> Downloaded our stuff-->
<!--    before?</p>-->
<script>
    $("#target").change(function () {
        if ($(this).is(":checked")) {
            if (localStorage['nombresolicitante']) {
                $("input[name='nombresolicitante']").val(localStorage['nombresolicitante']);
            }
            if (localStorage['dnisolicitante']) {
                $("input[name='dnisolicitante']").val(localStorage['dnisolicitante']);
            }
            if (localStorage['celularsolicitante']) {
                $("input[name='celularsolicitante']").val(localStorage['celularsolicitante']);
            }
            if (localStorage['correosolicitante']) {
                $("input[name='correosolicitante']").val(localStorage['correosolicitante']);
            }
        }
    });
    $(".wpcf7-text").on("change", function () {
        localStorage.setItem($(this).attr("name"), $(this).val());
    });
</script>

<!--<html>-->

<!--<head>-->
<!--    <style>-->
<!--        .valor-desplegable {-->
<!--            position: relative;-->
<!--            width: 200px;-->
<!--            height: 25px;-->
<!--            overflow: hidden;-->
<!--        }-->

<!--        .valor-desplegable:hover {-->
<!--            overflow: visible;-->
<!--        }-->

<!--        .valor-desplegable .valorTexto {-->
<!--            width: 200px;-->
<!--            height: 25px;-->
<!--            line-height: 25px;-->
<!--            padding-left: 4px;-->
<!--            background: white;-->
<!--            border: 1px solid #ddd;-->
<!--            position: relative;-->
<!--            box-sizing: border-box;-->
<!--            color: #222;-->
<!--        }-->

<!--        .valor-desplegable .valorTexto::after {-->
<!--            content: "\25BF";-->
<!--            position: absolute;-->
<!--            right: 4px;-->
<!--            color: #222 !important;-->
<!--        }-->

<!--        .valor-desplegable>ol,-->
<!--        .valor-desplegable>ol>li>ol {-->
<!--            list-style: none;-->
<!--            padding-left: 0;-->
<!--            position: absolute;-->
<!--            top: 24px;-->
<!--            border: 1px solid #ddd;-->
<!--            width: 200px;-->
<!--            margin-top: 0;-->
<!--            box-sizing: border-box;-->
<!--            background: white;-->
<!--        }-->

<!--        .valor-desplegable li {-->
<!--            display: block;-->
<!--            height: 25px;-->
<!--            line-height: 25px;-->
<!--            padding-left: 4px;-->
<!--            border-bottom: 1px solid #f5f5f5;-->
<!--            position: relative;-->
<!--            overflow: hidden;-->
<!--            cursor: pointer;-->
<!--        }-->

<!--        .valor-desplegable li:hover {-->
<!--            overflow: visible;-->
<!--            background: #f8f8f8;-->
<!--        }-->

<!--        .valor-desplegable>ol>li>ol {-->
<!--            top: -1px;-->
<!--            left: 198px;-->
<!--        }-->

<!--        .valor-desplegable>ol>li>ol::before {-->
<!--            content: "\25B9";-->
<!--            position: absolute;-->
<!--            left: -15px;-->
<!--        }-->
<!--    </style>-->
<!--</head>-->

<!--<body>-->

<!--    <form>-->
<!--        <div class="valor-desplegable">-->
<!--            <input type="hidden" name="miValor" id="miValor" value="" />-->
<!--            <div id="miValorVisible" class="valorTexto">Selecciona un valor</div>-->
<!--            <ol>-->
<!--                <li data-val="1">Opción 1</li>-->
<!--                <li>-->
<!--                    Opción 2-->
<!--                    <ol>-->
<!--                        <li data-val="2.1">Sub-opción 2.1</li>-->
<!--                        <li data-val="2.2">Sub-opción 2.2</li>-->
<!--                    </ol>-->
<!--                </li>-->
<!--                <li>-->
<!--                    Opción 3-->
<!--                    <ol>-->
<!--                        <li data-val="3.1">Sub-opción 3.1</li>-->
<!--                        <li data-val="3.2">Sub-opción 3.2</li>-->
<!--                        <li data-val="3.3">Sub-opción 3.3</li>-->
<!--                    </ol>-->
<!--                </li>-->
<!--                <li data-val="4">Opción 4</li>-->
<!--            </ol>-->
<!--        </div>-->
<!--        <input type="submit" value="Enviar" id="enviar" />-->
<!--    </form>-->
<!--    <script>-->
<!--        var lis = document.querySelectorAll(".valor-desplegable [data-val]");-->
<!--// cada vez que se pulse en una opción del menú desplegable-->
<!--        for (var x = 0; x < lis.length; x++) {-->
<!--            lis[x].addEventListener("click", function () {-->
<!--// actualizar el texto y el valor-->
<!--                document.getElementById("miValorVisible").textContent = this.textContent;-->
<!--                document.getElementById("miValor").value = this.dataset.val;-->
<!--            });-->
<!--        }-->

<!--// mostrar el valor cuando se pulse en Enviar (en vez de enviar)-->
<!--        document.getElementById("enviar").addEventListener("click", function (e) {-->
<!--            e.preventDefault();-->
<!--            console.log("El valor del select es: " + document.getElementById("miValor").value);-->
<!--        });-->



<!--    </script>-->
<!--</body>-->

<!--</html>-->



<!--<html>-->
<!--    <head>-->

<!--    </head>-->
<!--    <body>-->
<!--        <form method="post" name="id">-->

<!-- Nombre: <input type="text" name="numero1" id="numero1" size="10" onKeyUp="generarId()"/>-->
<!-- Apellidos: <input type="text" name="numero2" id="numero2" size="10" onKeyUp="generarId()"/>-->
<!--Edad:  <input type="text" name="numero3" id="numero3" size="10" onKeyUp="generarId()"/>-->


<!--Resultado: <input type="text" name="resultado2" id="resultado2"/>-->

<!--</form>-->
<!--<script type="text/javascript">-->
<!--    function generarId(){-->
<!--        document.getElementById("resultado2").value =-->
<!--            document.getElementById("numero1").value +-->
<!--            document.getElementById("numero2").value ;-->
<!--    }-->
<!-- </script>-->
<!--    </body>-->
<!--</html>-->






<!--<html>-->
<!--    <head>-->
<!--origen-->
<!--        <script type="text/javascript">-->

<!--function slctr(texto,valor){-->
<!--this.texto = texto-->
<!--this.valor = valor-->
<!--}-->
<!--var herramientas=new Array()-->
<!--herramientas[0] = new slctr('- -Herramientas- -')-->
<!--herramientas[1] = new slctr("Jardín",'jardin')-->
<!--herramientas[2] = new slctr("fontanería",'fontaneria')-->


<!--var muebles=new Array()-->
<!--muebles[0] = new slctr('- -Muebles- -')-->
<!--muebles[1] = new slctr("Salón",'salon')-->
<!--muebles[2] = new slctr("dormitorio",'dormitorio')-->

<!--//*******Nietos*******************-->
<!--var jardin = new Array()-->
<!--jardin[0] = new slctr('- -Jardín- -')-->
<!--jardin[1] = new slctr("podadora",null)-->
<!--jardin[2] = new slctr("segadora" ,null)-->

<!--var fontaneria = new Array()-->
<!--fontaneria[0] = new slctr('- -Fontanería- -')-->
<!--fontaneria[1] = new slctr("llave inglesa",null)-->
<!--fontaneria[2] = new slctr("llave fija",null)-->

<!--var salon = new Array()-->
<!--salon[0] = new slctr('- -Salón- -')-->
<!--salon[1] = new slctr("Mesa",null)-->
<!--salon[2] = new slctr("silla" ,null)-->

<!--var dormitorio = new Array()-->
<!--dormitorio[0] = new slctr('- -Dormitorio- -')-->
<!--dormitorio[1] = new slctr("cama",null)-->
<!--dormitorio[2] = new slctr("mesita" ,null)-->

<!--function slctryole(cual,donde){-->
<!--if(cual.selectedIndex != 0){-->
<!--donde.length=0-->
<!--cual = eval(cual.value)-->
<!--for(m=0;m<cual.length;m++){-->
<!--var nuevaOpcion = new Option(cual[m].texto);-->
<!--donde.options[m] = nuevaOpcion;-->
<!--if(cual[m].valor != null){-->
<!--donde.options[m].value = cual[m].valor-->
<!--}-->
<!--else{-->
<!--donde.options[m].value = cual[m].texto-->
<!--}-->
<!--}-->
<!--}-->
<!--}-->
<!--</script>-->


<!--destino-->
<!--origen-->
<!--        <script type="text/javascript">-->

<!--function slct(texto,valor){-->
<!--this.texto = texto-->
<!--this.valor = valor-->
<!--}-->
<!--var herramientas=new Array()-->
<!--herramientas[0] = new slct('- -Herramientas- -')-->
<!--herramientas[1] = new slct("Jardín",'jardin')-->
<!--herramientas[2] = new slct("fontanería",'fontaneria')-->


<!--var muebles=new Array()-->
<!--muebles[0] = new slct('- -Muebles- -')-->
<!--muebles[1] = new slct("Salón",'salon')-->
<!--muebles[2] = new slct("dormitorio",'dormitorio')-->

<!--//*******Nietos*******************-->
<!--var jardin = new Array()-->
<!--jardin[0] = new slct('- -Jardín- -')-->
<!--jardin[1] = new slct("podadora",null)-->
<!--jardin[2] = new slct("segadora" ,null)-->

<!--var fontaneria = new Array()-->
<!--fontaneria[0] = new slct('- -Fontanería- -')-->
<!--fontaneria[1] = new slct("llave inglesa",null)-->
<!--fontaneria[2] = new slct("llave fija",null)-->

<!--var salon = new Array()-->
<!--salon[0] = new slct('- -Salón- -')-->
<!--salon[1] = new slct("Mesa",null)-->
<!--salon[2] = new slct("silla" ,null)-->

<!--var dormitorio = new Array()-->
<!--dormitorio[0] = new slct('- -Dormitorio- -')-->
<!--dormitorio[1] = new slct("cama",null)-->
<!--dormitorio[2] = new slct("mesita" ,null)-->

<!--function slctryol(cual,donde){-->
<!--if(cual.selectedIndex != 0){-->
<!--donde.length=0-->
<!--cual = eval(cual.value)-->
<!--for(m=0;m<cual.length;m++){-->
<!--var nuevaOpcion = new Option(cual[m].texto);-->
<!--donde.options[m] = nuevaOpcion;-->
<!--if(cual[m].valor != null){-->
<!--donde.options[m].value = cual[m].valor-->
<!--}-->
<!--else{-->
<!--donde.options[m].value = cual[m].texto-->
<!--}-->
<!--}-->
<!--}-->
<!--}-->
<!--</script>-->
<!--    </head>-->
<!--    <body>-->
<!--        <form name="form1" method="post" action="">-->
<!--<select name="select"onChange="slctryole(this,this.form.select2);slctryole(this,this.form.select3)" >-->



<!--<option>- - Seleccionar - -</option>-->
<!--<option value="herramientas">herramientas</option>-->
<!--<option value="muebles">muebles</option>-->
<!--</select>-->
<!--<select name="select2" >-->
<!--<option>- - - - - -</option>-->
<!--</select>-->
<!--<select name="select3">-->
<!--<option>- - - - - -</option>-->
<!--</select>-->
<!--</form>-->
<!--    </body>-->

<!--</html>-->




<!--<head>-->
<!--</head>-->

<!--<body>-->
<!--  <form action="" method="get">-->
<!--    <input type="text" name="name_first" placeholder="First Name" oninput="join_names();"-->
<!--      onpaste="join_names();" /><br />-->
<!--    <input type="text" name="name_last" placeholder="Last Name" oninput="join_names();" onpaste="join_names();" /><br />-->
<!--    <input type="text" name="name_full" placeholder="Full Name" /><br />-->

<!--  </form>-->
<!--  <script type="text/javascript">-->
<!--function concatenate(/*String*/string_one, /*String*/string_two, /*boolean*/with_space) {-->
<!--      if (with_space === true) {-->
<!--        return string_one + ' ' + string_two;-->
<!--      }-->
<!--      else {-->
<!--        return string_one + string_two;-->
<!--      }-->
<!--    }-->
<!--    function join_names() {-->
<!--      var input_name_first = document.getElementsByName('name_first')[0].value;-->
<!--      var input_name_last = document.getElementsByName('name_last')[0].value;-->
<!--      var input_name_full = document.getElementsByName('name_full')[0];-->
<!--      var var_name_full = concatenate(input_name_first, input_name_last, true);-->
<!--      input_name_full.value = var_name_full;-->
<!--    }-->
<!--  </script>-->
<!--</body>-->

<!--</html>-->



<html>

<head>
    <style>
        select {
            /*background-color:red;*/
            /*width:400px;*/
            /*background: #303F9F;*/
            border-radius: 1px;
            border: 2px solid #f2f2f2;
            color: #303F9F;
            cursor: pointer;
            display: inline-block;
            font-family: "Roboto";
            font-size: 16px;
            padding: 15px;
            width: 100%;
            -webkit-transition: all 0.3s ease;
            -o-transition: all 0.3s ease;
            transition: all 0.3s ease;
        }

        /*.contenedor-formulario .formulario input[type="date"]:hover {*/
        /*  background: #1976D2; }*/
        }
    </style>
</head>

<body>

    <!--<label  for="dir">Direccion</label></br>-->
    <!--  <select id="dir" name="dir">-->

    <option value=""></option>




    </div>


</body>

</html>






<!--<html>-->
<!--    <head>-->

<!--    </head>-->
<!--    <body>-->

<!--<input type="text" onclick="action2()" id="año" name="año">-->
<!--<input type="text" id="mes" name="mes">-->

<!--<p><button onclick="action()" type="button">Save me!</button></p>-->
<!-- <p><button onclick="action2()" type="button">Remember me!</button></p> -->

<!--<script>-->
<!--    function action() {-->
<!--        window.localStorage['año'] = document.getElementById('año').value;-->
<!--        window.localStorage['mes'] = document.getElementById('mes').value;-->

<!--    }-->

<!--    function action2() {-->
<!--        document.getElementById('año').value = window.localStorage['año'];-->
<!--        document.getElementById('mes').value = window.localStorage['mes'];-->

<!--    }-->
<!--</script>-->
<!--    </body>-->
<!--</html>-->




<!-- <p><button onclick="action2()" type="button">Remember me!</button></p> -->


