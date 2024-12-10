document.addEventListener("DOMContentLoaded", function() {
    // Check local storage and show coupon codes if already clicked
    @foreach ($coupons as $coupon)
        var couponId = '{{ $coupon->id }}';
        if (localStorage.getItem('couponClicked_' + couponId)) {
            var couponLink = $('#getCode' + couponId);
            var couponCode = $('#codeIndex' + couponId);
            var copyBtn = $('#copyBtn' + couponId);

            couponLink.hide();
            couponCode.show();
            copyBtn.show();
        }
    @endforeach
});

function countClicks(couponId) {
    document.getElementById('coupon_id').value = couponId;
    document.getElementById('clickForm').submit();
}

function countAndHandleClicks(couponId) {
    // Count the click
    document.getElementById('coupon_id').value = couponId;
    document.getElementById('clickForm').submit();

    // Handle coupon click to show coupon code
    var couponLink = $('#getCode' + couponId);
    var couponCode = $('#codeIndex' + couponId);
    var copyBtn = $('#copyBtn' + couponId);

    // Toggle visibility of link and coupon code span
    couponLink.hide();
    couponCode.show();
    copyBtn.show();

    // Store the clicked state in local storage
    localStorage.setItem('couponClicked_' + couponId, true);
}

function copyToClipboard(couponId) {
    var couponCode = $('#codeIndex' + couponId).text().trim();
    var tempInput = $('<input>');
    $('body').append(tempInput);
    tempInput.val(couponCode).select();
    document.execCommand('copy');
    tempInput.remove();

    // Show copy confirmation message
    var copyConfirmation = $('#copyConfirmation' + couponId);
    copyConfirmation.fadeIn().delay(1000).fadeOut();
}


$(document).ready(function() {
    $('#searchInput').autocomplete({
        source: function(request, response) {
            $.ajax({
                url: '{{ route("search") }}',
                dataType: 'json',
                data: {
                    query: request.term
                },
                success: function(data) {
                    response(data.stores);
                }
            });
        },
        minLength:1 // Minimum characters before autocomplete starts
    });
});

        document.addEventListener('DOMContentLoaded', function () {
            document.querySelectorAll('.toggle-description').forEach(function (toggle) {
                toggle.addEventListener('click', function (e) {
                    e.preventDefault();
                    var shortDescription = toggle.parentNode.querySelector('.short-description');
                    var fullDescription = toggle.parentNode.querySelector('.full-description');

                    if (shortDescription.style.display === 'none') {
                        shortDescription.style.display = 'inline';
                        fullDescription.style.display = 'none';
                        toggle.textContent = 'Show More';
                    } else {
                        shortDescription.style.display = 'none';
                        fullDescription.style.display = 'inline';
                        toggle.textContent = 'Show Less';
                    }
                });
            });
        });
