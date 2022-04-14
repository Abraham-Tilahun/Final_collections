function Announcement() {
    var letters = /^[A-Za-z]+$/;
    var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    var phoneno = /^\+?([0-9]{2})\)?[-. ]?([0-9]{4})[-. ]?([0-9]{4})$/;

    if (document.announcement.title.value == "" || document.announcement.title.value == null) {
        document.getElementById("title").innerHTML = "Please Enter announcement title";
        document.announcement.title.focus();
        return false;
    }
    if (!letters.test(document.announcement.title.value )) {
        document.getElementById("title").innerHTML = "Please Enter Letter Only";
        document.announcement.title.focus();
        return false;
    }
   
    if (document.announcement.for.value == "default") {
        document.getElementById("for").innerHTML = "Please Select for you prepared";
        document.getElementById("title").innerHTML = '';
        document.annnouncement.for.focus();
        return false;
    }
    if (document.announcement.date.value == ""||document.announcement.date.value ==null) {
        document.getElementById("date").innerHTML = "Please Enter Expired date ";
        document.getElementById("title").innerHTML = '';
        document.getElementById("for").innerHTML = '';
        document.annnouncement.date.focus();
        return false;
    }
    if (document.announcement.note.value == ""||document.announcement.note.value ==null) {
        document.getElementById("note").innerHTML = "Please Enter Announcement ";
        document.getElementById("date").innerHTML = '';
        document.getElementById("title").innerHTML = '';
        document.getElementById("date").innerHTML = '';
        document.getElementById("for").innerHTML = '';
        document.annnouncement.note.focus();
        return false;
    }
else{
    return true;
}
}

