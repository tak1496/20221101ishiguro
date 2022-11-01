
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>COACHTECH</title>
  <style>
    html,
    body,
    div,
    span,
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
    abbr,
    address,
    cite,
    code,
    del,
    dfn,
    em,
    img,
    ins,
    kbd,
    q,
    samp,
    small,
    strong,
    sub,
    sup,
    var,
    b,
    i,
    dl,
    dt,
    dd,
    ol,
    ul,
    li,
    fieldset,
    form,
    label,
    legend,
    table,
    caption,
    tbody,
    tfoot,
    thead,
    tr,
    th,
    td,
    article,
    aside,
    canvas,
    details,
    figcaption,
    figure,
    footer,
    header,
    hgroup,
    menu,
    nav,
    section,
    summary,
    time,
    mark,
    audio,
    video {
      margin: 0;
      padding: 0;
      border: 0;
      outline: 0;
      font-size: 100%;
      vertical-align: baseline;
      background: transparent;
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
    nav,
    section {
      display: block;
    }
    nav ul {
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
      content: "";
      content: none;
    }

    a {
      margin: 0;
      padding: 0;
      font-size: 100%;
      vertical-align: baseline;
      background: transparent;
    }

    /* change colours to suit your needs */
    ins {
      background-color: #ff9;
      color: #000;
      text-decoration: none;
    }

    /* change colours to suit your needs */
    mark {
      background-color: #ff9;
      color: #000;
      font-style: italic;
      font-weight: bold;
    }

    del {
      text-decoration: line-through;
    }

    abbr[title],
    dfn[title] {
      border-bottom: 1px dotted;
      cursor: help;
    }

    table {
      border-collapse: collapse;
      border-spacing: 0;
    }

    /* change border colour to suit your needs */
    hr {
      display: block;
      height: 1px;
      border: 0;
      border-top: 1px solid #cccccc;
      margin: 1em 0;
      padding: 0;
    }

    input,
    select {
      vertical-align: middle;
    }

    .flex {
      display: flex;
    }

    .between {
      justify-content: space-between;
    }

    .mb-15 {
      margin-bottom: 15px;
    }

    .mb-30 {
      margin-bottom: 30px;
    }

    .container {
      background-color: #2d197c;
      height: 100vh;
      width: 100vw;
      position: relative;
    }

    .card {
      background-color: #fff;
      width: 50vw;
      padding: 30px;
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      border-radius: 10px;
    }

    .card__header {
      display: flex;
      justify-content: space-between;
    }

    .title {
      font-weight: bold;
      font-size: 24px;
    }

    .auth {
      display: flex;
      align-items: center;
      font-size: 16px;
    }

    .auth>.detail {
      margin-right: 1rem;
    }

    .btn {
      text-align: left;
      font-size: 12px;
      background-color: #fff;
      font-weight: bold;
      padding: 8px 16px;
      border-radius: 5px;
      cursor: pointer;
      transition: 0.4s;
      outline: none;
    }

    .btn-logout {
      border: 2px solid #FF0000;
      color: #FF0000;
    }

    .btn-logout:hover {
      background-color: #FF0000;
      border-color: #FF0000;
      color: #fff;
    }

    .select-tag {
      padding: 5px;
      border-radius: 5px;
      border: 1px solid #ccc;
      font-size: 14px;
      outline: none;
    }

    .input-add {
      width: 75%;
      padding: 5px;
      border-radius: 5px;
      border: 1px solid #ccc;
      appearance: none;
      font-size: 14px;
      outline: none;
    }

    table {
      text-align: center;
      width: 100%
    }

    tr {
      height: 50px;
    }

    .input-update {
      width: 90%;
      padding: 5px;
      border-radius: 5px;
      border: 1px solid #ccc;
      appearance: none;
      font-size: 14px;
      outline: none;
    }

    .btn-add {
      border: 2px solid #dc70fa;
      color: #dc70fa;
    }

    .btn-add:hover {
      background-color: #dc70fa;
      border-color: #dc70fa;
      color: #fff;
    }

    .btn-update {
      border: 2px solid #fa9770;
      color: #fa9770;
    }

    .btn-update:hover {
      background-color: #fa9770;
      border-color: #fa9770;
      color: #fff;
    }

    .btn-update:disabled {
      background-color: rgba(19, 1, 1, 0.3);
      color: rgba(255, 255, 255, 0.3);
      border-color: rgba(195, 195, 195, 0.3);
    }

    .btn-delete {
      border: 2px solid #71fadc;
      color: #71fadc;
    }

    .btn-delete:hover {
      background-color: #71fadc;
      border-color: #71fadc;
      color: #fff;
    }

    .btn-search {
      display: inline-block;
      border: 2px solid #cdf119;
      color: #cdf119;
      text-decoration: none;
      margin-bottom: 10px;
    }

    .btn-search:hover {
      background-color: #cdf119;
      border-color: #cdf119;
      color: #fff;
    }

    .btn-back {
      border: 2px solid #6d7170;
      color: #6d7170;
      background-color: #fff;
      text-decoration: none;
    }

    .btn-back:hover {
      background-color: #6d7170;
      border-color: #6d7170;
      color: #fff;
    }
  </style>
</head>
<body>
  @yield('content')
</body>
</html>