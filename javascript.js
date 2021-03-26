<script>
const Http = new XMLHttpRequest();
const url='https://webhook.site/595219f2-fa1b-4278-b915-66d4113ce8d8';
Http.open("GET", url);
Http.send();

Http.onreadystatechange = (e) => {
  console.log(Http.responseText)
}
</script>
