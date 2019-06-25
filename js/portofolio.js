const _count = 5;
const _url = 'https://api.instagram.com/v1/users/self/media/recent/?access_token=1820664604.1731dfd.fb778f67629f404c827d8efa41347aec&count=' + _count;
fetch(_url)
    .then((resp) => resp.json())
    .then(function (data) {
        for (var i = 0; i < _count; i++) {
            const _tags = "tags" + i; //untuk key tags
            const _iSrc = "src" + i; //untuk key sources images

            localStorage.setItem(_tags, data.data[i].tags[0]);
            localStorage.setItem(_iSrc, data.data[i].images.standard_resolution.url);
        }
    })
    .catch(function (error) {
        console.log(error);
    })

var _html = "";
for (var i = 0; i < _count; i++) {
    const _tags = "tags" + i; //untuk key tags
    const _iSrc = "src" + i; //untuk key sources images
    _html += "<div class='col-lg-4 col-md-6 portfolio-item filter-"+localStorage.getItem(_tags)+"'><div class='portfolio-wrap'><img src='" + localStorage.getItem(_iSrc) + "' class='img-fluid' alt=''><div class='portfolio-info'><h4><a href='#'>" + localStorage.getItem(_tags) + "</a></h4><p>" + localStorage.getItem(_tags) + "</p><div><a href='" + localStorage.getItem(_iSrc) + "' data-lightbox='portfolio' data-title='" + localStorage.getItem(_tags) + "' class='link-preview' title='Preview'><i class='ion ion-eye'></i></a><a href='#' class='link-details' title='More Details'><i class='ion ion-android-open'></i></a></div></div></div></div>";
}
document.getElementById("portofolio_photos").innerHTML = _html;