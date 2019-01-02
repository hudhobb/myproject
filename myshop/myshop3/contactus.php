<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->


<!DOCTYPE html><html class=''>
<head><script src='//production-assets.codepen.io/assets/editor/live/console_runner-079c09a0e3b9ff743e39ee2d5637b9216b3545af0de366d4b9aad9dc87e26bfd.js'></script><script src='//production-assets.codepen.io/assets/editor/live/events_runner-73716630c22bbc8cff4bd0f07b135f00a0bdc5d14629260c3ec49e5606f98fdd.js'></script><script src='//production-assets.codepen.io/assets/editor/live/css_live_reload_init-2c0dc5167d60a5af3ee189d570b1835129687ea2a61bee3513dee3a50c115a77.js'></script><meta charset='UTF-8'><meta name="robots" content="noindex"><link rel="shortcut icon" type="image/x-icon" href="//production-assets.codepen.io/assets/favicon/favicon-8ea04875e70c4b0bb41da869e81236e54394d63638a1ef12fa558a4a835f1164.ico" /><link rel="mask-icon" type="" href="//production-assets.codepen.io/assets/favicon/logo-pin-f2d2b6d2c61838f7e76325261b7195c27224080bc099486ddd6dccb469b8e8e6.svg" color="#111" /><link rel="canonical" href="https://codepen.io/nw/pen/NxNWzX?depth=everything&limit=all&order=popularity&page=9&q=contact&show_forks=false" />



<link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css'><link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Roboto:400,500'><link rel='stylesheet prefetch' href="https://d19vzq90twjlae.cloudfront.net/leaflet/v0.7.7/leaflet.css">
<style class="cp-pen-styles">.card, .card__heading {
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
}

.card:after {
  content: '';
  display: table;
  clear: both;
}

body {
  background: #eff6f8;
  font-family: Roboto, Helvetica, sans-serif;
  font-weight: 400;
  font-size: 18px;
}

.container {
  width: 580px;
  margin: 40px auto;
}

.card {
  display: block;
  width: 100%;
  position: relative;
  background: white;
  z-index: 0;
}
.card__heading {
  display: inline-block;
  position: absolute;
  top: -0.5em;
  left: -0.5em;
  padding: 14px 22px 11px;
  text-transform: uppercase;
  font-size: 2em;
  font-weight: 500;
  color: white;
  background: #29e3dc;
}

.contact__map {
  display: block;
  height: 100%;
  width: 100%;
  position: absolute;
  z-index: -1;
}
.contact__map:before, .contact__map:after {
  content: '';
  display: block;
  width: 100%;
  height: 100%;
  position: absolute;
  top: 0;
  left: 0;
}
.contact__map:after {
  background: -webkit-radial-gradient(ellipse 80px 80px at 184px 155px, rgba(255, 255, 255, 0.2) 99%, #ffffff 250%);
  background: radial-gradient(ellipse 80px 80px at 184px 155px, rgba(255, 255, 255, 0.2) 99%, #ffffff 250%);
  mix-blend-mode: saturation;
}
.contact__map:before {
  background: -webkit-radial-gradient(ellipse 80px 80px at 184px 155px, rgba(255, 255, 255, 0.2) 99%, rgba(255, 255, 255, 0.8) 100%);
  background: radial-gradient(ellipse 80px 80px at 184px 155px, rgba(255, 255, 255, 0.2) 99%, rgba(255, 255, 255, 0.8) 100%);
  mix-blend-mode: screen;
  z-index: 1;
}
.contact__map .map__inner {
  width: 100%;
  height: 100%;
}
.contact__map .map__inner .leaflet-control-attribution {
  opacity: 0.4;
}
.contact__map .map__inner .leaflet-control-attribution:hover {
  opacity: 0.6;
}
.contact__map .map__circle {
  display: block;
  box-sizing: border-box;
  width: 160px;
  height: 160px;
  position: absolute;
  left: 104px;
  top: 75px;
  border: 6px solid #29e3dc;
  border-radius: 50%;
  box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1), 0 4px 16px rgba(0, 0, 0, 0.1) inset;
  z-index: 1;
}
.contact__content {
  float: right;
  padding: 30px 50px;
  line-height: 1.35;
}

dt {
  margin-top: 1.35em;
}
dt:first-child {
  margin-top: 0;
}

dt {
  color: #818181;
}

dd {
  color: #19c0ba;
}


</style></head><body>

<div class="map__inner container">
  <section class="card card--contact">
    <h1 align="center" class="card__heading">Contact Us</h1>
    <div class="contact__map">
      <div class="map__circle"></div>
      <div class="map__inner" id="contact-map"></div>
    </div>
    <div class="contact__content">
      <div align="center">
        <dl>
          <br>
          <dt>Email</dt>
          <dd>TungKeawMint@gmail.com</dd>
          <dt>Phone</dt>
          <dd>023605789</dd>
          <dt>Address</dt>
          <dd>ตั้งเคี่ยวมิ้น, 24-26 ตรอก เจริญชัย 2 ถนน เจริญกรุง, 10100 Bangkok, Thailand</dd>
        </dl>
      </div>
    </div>
  </section>
</div>
<div align="center">
  <script src="https://d19vzq90twjlae.cloudfront.net/leaflet/v0.7.7/leaflet.js"></script>
  <?php include('map.php');?>
</div>
<script >var map = L.map('contact-map', { zoomControl: false, attributionControl: false }).setView([-37.796407, 175.277832], 15);

L.tileLayer('http://stamen-tiles-{s}.a.ssl.fastly.net/watercolor/{z}/{x}/{y}.{ext}', {
	
	subdomains: 'abcd',
	minZoom: 1,
	maxZoom: 16,
	ext: 'png'
}).addTo(map);


map.panBy([106, 0], { animate: false });
//# sourceURL=pen.js
</script>
</body></html>