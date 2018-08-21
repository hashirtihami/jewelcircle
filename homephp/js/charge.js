var args = {
    sellerId: "1817037",
    publishableKey: "E0F6517A-CFCF-11E3-8295-A7DD28100996",
    ccNo: $("#ccNo").val(),
    cvv: $("#cvv").val(),
    expMonth: $("#expMonth").val(),
    expYear: $("#expYear").val()
};

TCO.loadPubKey('production', function() {
    TCO.requestToken(successCallback, errorCallback, args);
});​