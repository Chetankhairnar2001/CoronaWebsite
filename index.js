function updateMap(){
    fetch("data.json")
    .then(response => response.json())
    .then(mapdata => {
        // console.log(mapdata.data)
        console.log("update ho re")
        mapdata.data.forEach(element => {
           latitude = element.latitude;
           longitude = element.longitude;
           infect = element.infected;

           if(infect > 255){
               color= "rgb(255, 0, 0)";
           }
           else{
               color= `rgb(${infect},0,0)`;
           }
           
            new mapboxgl.Marker({
            draggable: false,
            color: color
            })
            .setLngLat([longitude, latitude])
            .addTo(map);
        });
    })
}

// updateMap();

let interval = 4000; //update in 4 sec
setInterval(updateMap,interval);