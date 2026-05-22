<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        
        var elemsSidenav = document.querySelectorAll('.sidenav');
        if (elemsSidenav.length > 0) {
            M.Sidenav.init(elemsSidenav);
        }

        var elemsSelect = document.querySelectorAll('select');
        if (elemsSelect.length > 0) {
            M.FormSelect.init(elemsSelect);
        }
    });
</script>

</body>
</html>