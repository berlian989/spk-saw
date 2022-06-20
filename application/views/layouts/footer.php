<div class="footer">
    <div class="container">
        <div class="copy">
            <p>© Tugas Akhir Recomender System </p>
        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script>
$("select").on("click", function() {
    $(this).parent(".select-box").toggleClass("open");
});

$(document).mouseup(function(e) {
    var container = $(".select-box");
    if (container.has(e.target).length === 0) {
        container.removeClass("open");
    }
});
$("select").on("change", function() {
    var selection = $(this).find("option:selected").text(),
        labelFor = $(this).attr("id"),
        label = $("[for='" + labelFor + "']");
    label.find(".label-desc").html(selection);
});
</script>
</body>

</html>