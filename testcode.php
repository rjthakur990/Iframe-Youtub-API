testcode
<script type='text/javascript'>
    //use of cookes in javascript
    newday = new Date();
    document.cookie = "name=''; expires="+newday+"; path=/;";
    document.write(document.cookie);
</script>