var minimized = true;
visible = true;

function toggleSidebar() {
    if (minimized) {
        document.getElementById("sidebar").style.width = "250px";
        document.getElementById("main").style.marginLeft = "250px";
        document.getElementById("divisor").style.width = "80%"
        var labels = document.getElementsByClassName("icon-text");

        for (i = 0; i < labels.length; i++) {
  			labels[i].style.visibility = "visible";
		}

        this.minimized = false;

    } else {
        document.getElementById("sidebar").style.width = "70px";
        document.getElementById("main").style.marginLeft = "70px";
        document.getElementById("divisor").style.width = "100%"
        var labels = document.getElementsByClassName("icon-text");

        for (i = 0; i < labels.length; i++) {
  			labels[i].style.visibility = "hidden";
		}
		
        this.minimized = true;
    }
}

function toggleSideBarVisibility(){
    if (visible) {
        document.getElementById("sidebar").style.width = "0px";
        document.getElementById("main").style.marginLeft = "0px";
        this.visible = false;

    } else {
        document.getElementById("sidebar").style.width = "70px";
        document.getElementById("main").style.marginLeft = "70px";
        this.visible = true;
    }
}