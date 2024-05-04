<!--<script setup>-->
<!--import { ref, watch, nextTick } from 'vue';-->

<!--const props = defineProps({-->
<!--    value: { type: String, default: ''},-->
<!--    renderComponent: { type: Boolean, default: true }-->
<!--});-->


<!--const forceRerender = async () => {-->
<!--    // Remove MyComponent from the DOM-->
<!--    props.renderComponent = false;-->

<!--    // Wait for the change to get flushed to the DOM-->
<!--    await nextTick();-->

<!--    // Add the component back in-->
<!--    props.renderComponent = true;-->
<!--};-->



<!--const inputValue = ref('old value')-->


<!--const changeInputValue = () => {-->
<!--    inputValue.value = 'new value';-->
<!--    props.testValue = true;-->
<!--    forceRerender();-->
<!--}-->
<!--</script>-->


<!--<template>-->
<!--    <div>-->
<!--        <input v-model="inputValue" type="input" v-if="props.renderComponent" />-->
<!--        <div>{{ inputValue }}</div>-->

<!--        <button @click="changeInputValue">Change value</button>-->

<!--    </div>-->
<!--</template>-->



<script setup>
import { ref, watch, nextTick } from 'vue';
import axios from "axios";

// const props = defineProps([
//     'value', 'config', 'handle', 'meta', 'readOnly', 'showFieldPreviews', 'namePrefix', 'fieldPathPrefix',
//     { renderComponent: { type: Boolean, default: true } }
// ]);

const props = defineProps({
    value: { type: Object|Array },
    config: { type: Object|Array},
    renderComponent: { type: Boolean, default: true }
})

const isLoading = ref(false);
const items = ref();

const emit = defineEmits(['input', 'update']);

// const marker_street = ref('');
// const marker_street_number = ref('');
// const marker_zip = ref('');

const street = ref(props?.value?.street ?? '' );
const street_number = ref(props?.value?.street_number ?? '');
const zip = ref(props?.value?.zip ?? '');
const place = ref(props?.value?.place ?? '');
const country = ref(props?.value?.country ?? '');
const latitude = ref(props?.value?.latitude ?? '');
const longitude = ref(props?.value?.longitude ?? '');

// props.latitude = props?.value?.latitude ?? '';
// props.longitude = props?.value?.longitude ?? '';


const emitValues = ()=> {
    emit('input', {
        street: street.value,
        street_number: street_number.value,
        zip: zip.value,
        place: place.value,
        country: country.value,
        latitude: latitude.value,
        longitude: longitude.value,
    } );
}


const forceRerender = async () => {
    // Remove MyComponent from the DOM
    props.renderComponent = false;
    console.log(props.renderComponent);

    // Wait for the change to get flushed to the DOM
    await nextTick();

    // Add the component back in
    props.renderComponent = true;
    console.log(props.renderComponent);
};

// watch(latitude, (newLatitude) => {
//     latitude.value = 10;
//     longitude.value = 10;
//     console.log('🍕');
// });





const getCoordinates = () => {

    // LOADING
    isLoading.value = true;

    // let address = (props.value.street + ' ' + props.value.street_number + ';' + props.value.zip + ' ' + props.value.place + '; ' + props.value.country )
    // let url = 'https://nominatim.openstreetmap.org/search?format=json&q='+address;

    let query = 'street=' + street.value??'' + '-' + street_number.value??'';
    query += '&city=' + place.value;
    query += '&country=' + country.value;
    // query += '&sate=' + state;
    query += '&postalcode=' + zip.value;

    // query = encodeURIComponent(query);
    query.replace(/ /g,'')

    console.log(query);


    let url = 'https://nominatim.openstreetmap.org/search?format=json&' + query;




    // address = address.replace(/[^a-z0-9äöü_-]/gi, '-').toLowerCase();
    // url = 'https://nominatim.openstreetmap.org/search?format=json&q='+address;

    axios.get(url).then((response) => {
        let data = response.data ?? null;
        if(data.length == 0) {
            // ERROR: no result
            console.log('ERROR');
        } else {
            if(typeof data[0]['lat'] != undefined && typeof data[0]['lon'] != undefined) {
                latitude.value = data[0]['lat'];
                longitude.value = data[0]['lon'];


                // document.getElementById('latitude').value = data[0]['lat'];
                // document.getElementById('longitude').value = data[0]['lon'];

                // props.latitude = data[0]['lat'];
                // props.longitude = data[0]['lon'];
                emitValues();
            }

            if(data.length > 1) {
                // WARNING: too many results
                // items.value = data;
                console.log('WARNING');
            }
        }
        isLoading.value = false;

        console.log(props.renderComponent);
        forceRerender();
        console.log(props.renderComponent);
    });

}

</script>



<template>
    <div style="margin-left: -24px; margin-right: -24px;">

        <div class=" flex">

            <div class="form-group w-full @lg:w-3/4">
                <div class="field-inner">
                    <label class="publish-field-label ">Straße</label>
                </div>
                <text-input v-model="street" @input="emitValues()"/>
            </div>

            <div class="form-group w-full @lg:w-1/4">
                <div class="field-inner">
                    <label class="publish-field-label ">Hausnummer</label>
                </div>
                <text-input v-model="street_number" @input="emitValues()" />
            </div>

        </div>


        <div class="flex">

            <div class="form-group w-full @lg:w-1/4">
                <div class="field-inner">
                    <label class="publish-field-label ">PLZ</label>
                </div>
                <text-input v-model="zip" @input="emitValues()"/>
            </div>

            <div class="form-group w-full @lg:w-3/4">
                <div class="field-inner">
                    <label class="publish-field-label ">Ort</label>
                </div>
                <text-input v-model="place" @input="emitValues()" />
            </div>

        </div>



        <div class="flex">

            <div class="form-group w-full">
                <div class="field-inner">
                    <label class="publish-field-label ">Land</label>
                </div>
                <text-input v-model="country" @input="emitValues()"/>
            </div>
        </div>

        <div class="flex">
            <div class="form-group">
                <button v-on:click="getCoordinates()" class="btn btn-with-ico">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                    </svg>
                    Marker aktualisieren
                </button>

            </div>
        </div>




        <div id="alert-danger" class="alert alert-danger">
            <strong>Fehler:</strong> Die Suche ergab leider keine Treffer.
        </div>

        <div id="alert-warning" class="alert alert-warning">
            <strong>Achtung:</strong> Die Suche ergab mehrere Treffen:
            <ul>
                <li v-for="item in items">
                    {{ item.lat }}
                </li>
            </ul>
        </div>







        <div class="flex relative">
            <!--            <div v-show="isLoading == 'true'" class="loading absolute w-full h-full bg-white bg-opacity-75 z-1">-->
            <!--                <div class="flex justify-center items-center">-->
            <!--                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="currentColor" d="M10.72,19.9a8,8,0,0,1-6.5-9.79A7.77,7.77,0,0,1,10.4,4.16a8,8,0,0,1,9.49,6.52A1.54,1.54,0,0,0,21.38,12h.13a1.37,1.37,0,0,0,1.38-1.54,11,11,0,1,0-12.7,12.39A1.54,1.54,0,0,0,12,21.34h0A1.47,1.47,0,0,0,10.72,19.9Z"><animateTransform attributeName="transform" dur="0.75s" repeatCount="indefinite" type="rotate" values="0 12 12;360 12 12"/></path></svg>-->
            <!--                    <div>Daten werden aktualisiert ...</div>-->
            <!--                </div>-->
            <!--            </div>-->

            <div class="form-group w-full @lg:w-1/2">
                <div class="field-inner">
                    <label class="publish-field-label "> Breitengrad</label>
                </div>
                <text-input id="latitude" v-model="latitude" @input="emitValues()" v-if="props.renderComponent"/>
            </div>

            <div class="form-group w-full @lg:w-2/4">
                <div class="field-inner">
                    <label class="publish-field-label ">Längegrad</label>
                </div>
                <text-input id="longitude" v-model="longitude" @input="emitValues()" v-if="props.renderComponent"/>

            </div>

        </div>


        <div id="map">
            <l-map style="height: 300px" :zoom="zoom" :center="center">
                <l-tile-layer :url="url" :attribution="attribution"></l-tile-layer>
                <l-marker :lat-lng="markerLatLng"></l-marker>
            </l-map>
        </div>

    </div>



</template>
