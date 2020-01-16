<html>
<head>
  <meta charset="utf-8">
  <title></title>
  <link href="https://unpkg.com/material-components-web@latest/dist/material-components-web.min.css" rel="stylesheet">
  <script src="https://unpkg.com/material-components-web@latest/dist/material-components-web.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.25/angular.min.js"></script>
  <link rel="stylesheet" href="<?=base_url("assets/css/sidebar.css");?>">
</head>
<body>
  <header></header>

  <div class="mdc-card my-card" style="float: right;">
    <div>
      <h2>Tags</h2>
      <div class="mdc-chip-set" role="grid">
        <div class="mdc-chip" role="row">
          <div class="mdc-chip__ripple"></div>
          <span role="gridcell">
            <span role="button" tabindex="0" class="mdc-chip__text">Chip One</span>
          </span>
        </div>
        <div class="mdc-chip" role="row">
          <div class="mdc-chip__ripple"></div>
          <span role="gridcell">
            <span role="button" tabindex="-1" class="mdc-chip__text">Chip Two</span>
          </span>
        </div>
        <div class="mdc-chip" role="row">
          <div class="mdc-chip__ripple"></div>
          <span role="gridcell">
            <span role="button" tabindex="0" class="mdc-chip__text">Chip One</span>
          </span>
        </div>
        <div class="mdc-chip" role="row">
          <div class="mdc-chip__ripple"></div>
          <span role="gridcell">
            <span role="button" tabindex="-1" class="mdc-chip__text">Chip Two</span>
          </span>
        </div>
        <div class="mdc-chip" role="row">
          <div class="mdc-chip__ripple"></div>
          <span role="gridcell">
            <span role="button" tabindex="0" class="mdc-chip__text">Chip One</span>
          </span>
        </div>
        <div class="mdc-chip" role="row">
          <div class="mdc-chip__ripple"></div>
          <span role="gridcell">
            <span role="button" tabindex="-1" class="mdc-chip__text">Chip Two</span>
          </span>
        </div>
        <div class="mdc-chip" role="row">
          <div class="mdc-chip__ripple"></div>
          <span role="gridcell">
            <span role="button" tabindex="0" class="mdc-chip__text">Chip One</span>
          </span>
        </div>
        <div class="mdc-chip" role="row">
          <div class="mdc-chip__ripple"></div>
          <span role="gridcell">
            <span role="button" tabindex="-1" class="mdc-chip__text">Chip Two</span>
          </span>
        </div>
        <div class="mdc-chip" role="row">
          <div class="mdc-chip__ripple"></div>
          <span role="gridcell">
            <span role="button" tabindex="0" class="mdc-chip__text">Chip One</span>
          </span>
        </div>
        <div class="mdc-chip" role="row">
          <div class="mdc-chip__ripple"></div>
          <span role="gridcell">
            <span role="button" tabindex="-1" class="mdc-chip__text">Chip Two</span>
          </span>
        </div>
      </div>
      <div style="padding-top: 5px;"><a href="#" style="float: right; text-decoration: none;">View More...</a></div>
    </div>
    <div class="sort">
      <h2>Filter Questions</h2>
      <div>
        <select class="dropdown dropbtn">
          <option value="time">Recently Added</option>
          <option value="votes">Most Votes</option>
          <option value="views">Most Viewed</option>
        </select>
      </div>
    </div>
  </div>
</body>
</html>