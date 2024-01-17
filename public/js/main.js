$(document).ready(function () {
    // START Daftar Function
    function konfirmasiUmur() {
        Swal.fire({
            icon: "warning",
            title: 'Age Confirmation',
            html: '<input type="checkbox" id="checkboxKonfirmasiUmur"> I confirm that I am at least 18 years old or the legal age in my country.',
            showCancelButton: true,
            confirmButtonText: 'Enter',
            cancelButtonText: 'Cancel',
            showLoaderOnConfirm: true,
            confirmButtonColor: '#e03444',
            preConfirm: () => {
                const checkbox = Swal.getPopup().querySelector("#checkboxKonfirmasiUmur");
                if (!checkbox.checked) {
                    Swal.showValidationMessage('You must confirm your age to enter.');
                }
            },
            allowOutsideClick: () => !Swal.isLoading(),
        }).then((result) => {
            if (result.isConfirmed) {
                window.open('https://twitter.com/mengapaboneka', '_blank'); 3
            }
        });
    }

    function applyHoverEffect(buttonId, buttonTextId, ikonKiriId, ikonKananId, oldButtonText, newButtonText, newIkonKiriClass, newIkonKananClass) {
        $(buttonId).hover(
            function () {
                $(buttonTextId).animate({ opacity: 0 }, 200, function () {
                    $(this).text(newButtonText).animate({ opacity: 1 }, 200);
                });
                $(ikonKiriId).removeClass().addClass(newIkonKiriClass);
                $(ikonKananId).removeClass().addClass(newIkonKananClass);
            },
            function () {
                $(buttonTextId).animate({ opacity: 0 }, 200, function () {
                    $(this).text(oldButtonText).animate({ opacity: 1 }, 200);
                });
                $(ikonKiriId).removeClass().addClass(kelasIkonKiri);
                $(ikonKananId).removeClass().addClass(kelasIkonKanan);
            }
        );
    }
    // END Daftar Function

    // START Inisialisasi Metode
    applyHoverEffect('#nsfwButton', '#buttonText', '#ikonKiri', '#ikonKanan', 'NSFW ACCOUNT' ,'X - Twitter', 'bi bi-twitter-x float-start', 'transparent-item float-end');
    applyHoverEffect('#gtaButton', '#buttonTextGTA', '#ikonKiriGTA', '#ikonKananGTA', 'GTA RP' ,'In Development', 'bi bi-code-square float-start', 'transparent-item float-end');
    // END Inisialisasi Metode

    // START ETC
    $('#nsfwButton').click(function (e) {
        e.preventDefault();

        konfirmasiUmur();
    });
    // END ETC
});