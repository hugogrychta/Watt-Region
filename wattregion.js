function changetab(tab) {
    section = document.getElementsByClassName("section");
    for (i = 0; i < 5; i++) {
        section[i].style.display = "none";
    }
    section[tab].style.display = "block";
}

function changepage(page) {
    section = document.getElementsByClassName("page1");
    section2 = document.getElementsByClassName("page2");
    section3 = document.getElementsByClassName("page3");
    if (page == 0) {
        for (i = 0; section.length; i++) {
            section[i].style.display = "initial";
            section2[i].style.display = "none";
            section3[i].style.display = "none";
        }
    }
    if (section[0].style.display == "initial") {
        if (page == -1) {
            for (i = 0; section.length; i++) {
                section[i].style.display = "initial";
                section2[i].style.display = "none";
                section3[i].style.display = "none";
            }
        }
        if (page == 1) {
            for (i = 0; section.length; i++) {
                section[i].style.display = "none";
                section2[i].style.display = "initial";
                section3[i].style.display = "none";
            }
        }
    }

    if (section2[0].style.display == "initial") {
        if (page == -1) {
            for (i = 0; section.length; i++) {
                section[i].style.display = "initial";
                section2[i].style.display = "none";
                section3[i].style.display = "none";
            }
        }
        if (page == 1) {
            for (i = 0; section.length; i++) {
                section[i].style.display = "none";
                section2[i].style.display = "none";
                section3[i].style.display = "initial";
            }
        }
    }

    if (section3[0].style.display == "initial") {
        if (page == -1) {
            for (i = 0; section.length; i++) {
                section[i].style.display = "none";
                section2[i].style.display = "initial";
                section3[i].style.display = "none";
            }
        }
        if (page == 1) {
            for (i = 0; section.length; i++) {
                section[i].style.display = "none";
                section2[i].style.display = "none";
                section3[i].style.display = "initial";
            }
        }
    }

}