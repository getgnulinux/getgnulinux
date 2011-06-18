function unhide(divID) {
    var item = document.getElementById(divID);

    if (item) {
        item.className=(item.className=='hidden')?'unhidden':'hidden';
    }
}
