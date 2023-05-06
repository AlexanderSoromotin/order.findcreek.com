<script>

    $('.openPopup').click(function() {
        popupID = $(this).attr('popupID');
        openPopup(popupID);
    })
    function openPopup(id) {
        $('#' + id).addClass('show');

    }

    hidePopup = setTimeout(() => {}, 10);
    $(document).on('click', '.popup .close, .popup .background', function() {
        $(this).parents('.popup').removeClass('show');
    })
</script>