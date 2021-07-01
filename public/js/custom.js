$("#customFile").on("change", function () {
    $("#tenfile").empty();
    let length = $("#customFile").get(0).files.length;
    let arr = [];
    for (let index = 0; index < length; index++) {
        arr.push($("#customFile").get(0).files[index].name);
    }
    if (arr.length) {
        $("#tenfile").append(
            "<p class='font-weight-bold'>File đã chọn : " +
                arr.join(", ") +
                "</p>"
        );
    }
});
