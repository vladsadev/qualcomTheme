import $ from 'jquery';

class Search {
    //
    constructor() {
        this.openButton = $(".js-search-trigger");
        this.closeButton = $("#search-overlay__close");
        console.log(this.closeButton)
        this.searchOverlay = $(".search-overlay")
        this.events(); //events listener
    }

    //### Events listenner ###
    events() {
        this.openButton.on("click", this.openOverlay.bind(this));
        this.closeButton.on('click', this.closeOverlay.bind(this))
    }


    // ### Methods handlers
    openOverlay() {
        this.searchOverlay.addClass("search-overlay--active");
    }

    closeOverlay() {
        // console.log("ok I'll do")
        this.searchOverlay.removeClass("search-overlay--active");
    }
}

export default Search