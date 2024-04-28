window.onload = function() {
    var buttons = document.getElementsByClassName('viewListing');
    
    for (var i = 0; i < buttons.length; i++) {
        buttons[i].addEventListener('click', function() {
            var listingId = this.id;

            // Create an XMLHttpRequest object
            var xhr = new XMLHttpRequest();

            xhr.open('POST', '/~kylewilsie/fakeAirbnb-kw/src/ajax.php', true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

            xhr.onload = function() {
                if (xhr.status >= 200 && xhr.status < 300) {
                    console.log(xhr.responseText);

                    // Parse the JSON response
                    var response = JSON.parse(xhr.responseText);
                    
                    document.getElementById('modal-title').textContent = response.name;
                    document.querySelector('#modal-image img').src = response.pictureUrl;

                    footer = document.querySelectorAll('.modal-footer p');
                    footer[0].innerText = response.neighborhood;
                    footer[1].innerText = '$' + response.price + ' / night';
                    footer[2].innerText = 'Accomodates ' + response.accommodates;
                    footer[3].innerHTML = '<i class="bi bi-star-fill"></i> ' + response.rating;
                    footer[4].innerText = 'Hosted by ' + response.hostName;
                    footer[5].innerText = 'Amenities: ' + response.amenities.join(', ');;
                } else {
                    console.log('Request failed');
                }
            };

            xhr.send('id=' + listingId);
        });
    }
};
