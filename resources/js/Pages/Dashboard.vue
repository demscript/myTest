<template>
    <div>
        <AppNavbar />
        <div class="snap-grid" clickonwindow="true">
            <AppSidebar />

            <div class="main-content" v-if="perm">
                <div>
                    <nav aria-label="Breadcrumb" class="breadcrumb">
                        <ol>
                            <li class="text-sm lg:text-xl font-light hover:text-gray-900">
                                Snapbyte
                            </li>
                            <video ref="preview" style="display:none"></video>
                            <li class="text-sm lg:text-xl font-light hover:text-gray-900 flex items-center">
                                <svg fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"
                                    class="breadcrumb-icon">
                                    <path fill-rule="evenodd"
                                        d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                        clip-rule="evenodd"></path>
                                </svg><span>My Recordings</span>
                            </li>
                        </ol>
                    </nav>
                    <div class="snap-header">
                        <div class="first-child col-span-2 space-x-3 flex items-center mb-8 lg:mb-0">
                            <h3>My Recordings</h3>
                            <span class="block text-2xl text-3xl font-semibold">{{ recordings.length }}</span>
                        </div>
                        <div class="last-child">
                            <div class="last-child-flex-children last-child-flex-children-child1">
                                <div class="by-date">
                                    <div class="order-3 lg:order-1 mr-4 lg:mr-0 el-dropdown">
                                        <button class="by-date-btn el-dropdown-selfdefine" aria-haspopup="list"
                                            aria-controls="dropdown-menu-8645" role="button" tabindex="0">
                                            <span class="by-date-txt t-hidden lg:block">By Date</span><span
                                                class="by-date-svg"><svg id="calendar"
                                                    xmlns="http://www.w3.org/2000/svg" width="17.12" height="16"
                                                    viewBox="0 0 17.12 16">
                                                    <path id="Path_10019" data-name="Path 10019"
                                                        d="M16.253,2h-1.6V3.6a.533.533,0,0,1-1.067,0V2H5.053V3.6a.533.533,0,0,1-1.067,0V2h-1.6A1.469,1.469,0,0,0,1,3.6V5.52H18.067V3.6A1.8,1.8,0,0,0,16.253,2ZM1,6.64V16.4A1.447,1.447,0,0,0,2.44,18H16.307a1.8,1.8,0,0,0,1.813-1.6V6.64ZM5.747,15.6H4.467a.421.421,0,0,1-.427-.427V13.84a.421.421,0,0,1,.427-.427H5.8a.421.421,0,0,1,.427.427v1.333a.467.467,0,0,1-.48.427Zm0-4.8H4.467a.421.421,0,0,1-.427-.427V9.04a.421.421,0,0,1,.427-.427H5.8a.421.421,0,0,1,.427.427v1.333a.467.467,0,0,1-.48.427Zm4.267,4.8H8.68a.421.421,0,0,1-.427-.427V13.84a.421.421,0,0,1,.427-.427h1.333a.421.421,0,0,1,.427.427v1.333A.393.393,0,0,1,10.013,15.6Zm0-4.8H8.68a.421.421,0,0,1-.427-.427V9.04a.421.421,0,0,1,.427-.427h1.333a.421.421,0,0,1,.427.427v1.333A.393.393,0,0,1,10.013,10.8Zm4.267,4.8H12.947a.421.421,0,0,1-.427-.427V13.84a.421.421,0,0,1,.427-.427H14.28a.421.421,0,0,1,.427.427v1.333A.393.393,0,0,1,14.28,15.6Zm0-4.8H12.947a.421.421,0,0,1-.427-.427V9.04a.421.421,0,0,1,.427-.427H14.28a.421.421,0,0,1,.427.427v1.333A.393.393,0,0,1,14.28,10.8Z"
                                                        transform="translate(-1 -2)" fill="#637c8e"></path>
                                                </svg></span><i
                                                class="by-date-svg fas fa-chevron-down text-muted block lg:t-hidden"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="by-filter">
                                    <span class="order-last lg:order-2 bg-white">
                                        <div role="tooltip" id="el-popover-7478" aria-hidden="true"
                                            class="el-popover el-popper" tabindex="0"
                                            style="width: 300px; display: none"></div>
                                        <span class="el-popover__reference-wrapper"><button
                                                class="el-popover__reference" aria-describedby="el-popover-7478"
                                                tabindex="0">
                                                <span>Add Filter</span><i
                                                    class="fas fa-chevron-down"></i></button></span>
                                    </span>
                                </div>
                            </div>
                            <div class="last-child-flex-children last-child-flex-children2">
                                <div class="new-req">
                                    <button class="bg-primary border-none">
                                        <span> New Request </span>
                                    </button>
                                </div>
                                <div class="start-rec">
                                    <button class="bg-danger border-none text-white" data-toggle="modal"
                                        data-target="#recordModal">
                                        <span>Start Recording</span>
                                    </button>
                                </div>
                            </div>
                            <div class="record-modal">
                                <!-- Modal -->
                                <div class="modal fade" id="recordModal" tabindex="-1" role="dialog"
                                    aria-labelledby="recordModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-1" id="recordModalLabel">New Recording</h1>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="el-dialog__body">


                                                    <div class="switch-container">
                                                        <div class="flex between"><label class="font-medium">Record
                                                                screen</label>
                                                            <div role="switch" class="el-switch">
                                                                <!-- Rounded switch -->
                                                                <label class="switch">
                                                                    <input type="checkbox">
                                                                    <span class="slider round"></span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="flex between"><label class="font-medium">Record
                                                                camera</label>
                                                            <div role="switch" class="el-switch">
                                                                <!-- Rounded switch -->
                                                                <label class="switch">
                                                                    <input type="checkbox">
                                                                    <span class="slider round"></span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="flex between"><label class="font-medium">Record
                                                                mic</label>
                                                            <div role="switch" class="el-switch">
                                                                <!-- Rounded switch -->
                                                                <label class="switch">
                                                                    <input type="checkbox">
                                                                    <span class="slider round"></span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="flex center"><button
                                                            class="border-none bg-primary record-btn"
                                                            @click="startRecording"><span>Start
                                                                Recording</span></button></div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="snap-list-table-cover">
                            <table class="snap-list-table">
                                <thead>
                                    <tr>
                                        <th class="thumbnail-col">
                                            Recordings
                                        </th>
                                        <th class="p-lr-10 title-col">Title</th>
                                        <th class="minw-65 views-col">Views</th>
                                        <th class="minw-65 modified-col">
                                            Size
                                        </th>
                                        <th class="minw-100 modified-col">
                                            Last Modified
                                        </th>
                                        <th class="menu-col"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="snap-tr" v-for="(r, i) in recordings" :key="i">
                                        <td>
                                            <div class="video-container">
                                                <div class="parent-snap-thumb">
                                                    <img :src="r.image" class="snap-thumbnail" />
                                                </div>
                                            </div>
                                        </td>
                                        <td class="p-lr-10 snap-title-description">
                                            <div class="snap-title">
                                                {{ r.title }}
                                            </div>
                                            <input id="description-440673" placeholder="Add a description"
                                                class="snap-description-add" />
                                        </td>
                                        <td class="snap-title-align">{{ r.views }}</td>
                                        <td class="snap-title-align">{{ r.size }}</td>
                                        <td class="snap-title-align">
                                            {{ r.last_modified }}
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                    <div class="text-center text-3xl" style="display: none">
                        No data Found
                    </div>
                </div>
            </div>
            <div class="main-content pt-5" v-else>
                <div class="view-frame-wrapper">
                    <div>
                        <div class="record-screen-container">
                            <div class="d-flex pt-3" style="width: 466px;">
                                <div><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 16 16"
                                        class="rp-svg live-preview">
                                        <g id="Group_18142" data-name="Group 18142" transform="translate(-318 -144)">
                                            <g id="Ellipse_4472" data-name="Ellipse 4472" transform="translate(318 144)"
                                                fill="#fff" stroke="#EE5951" stroke-width="1">
                                                <circle cx="8" cy="8" r="8" stroke="none"></circle>
                                                <circle cx="8" cy="8" r="7.5" fill="none"></circle>
                                            </g>
                                            <circle id="Ellipse_4473" data-name="Ellipse 4473" cx="5" cy="5" r="5"
                                                transform="translate(321 147)" fill="#EE5951"></circle>
                                        </g>
                                    </svg></div>
                                <div class="ml-2"><span class="live-preview">Live
                                        Preview </span></div>
                            </div>
                            <div class="record-screen-body-outer minimise-canvas-cover">
                                <div class="record-screen-body minimise-canvas"><canvas id="my-video-canvas"
                                        class="minimise-canvas"></canvas></div>

                            </div>

                            <div class="text-center start-recording-wrapper"><button disabled="disabled"
                                    class="start-recording">Start
                                    Recording</button></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<style>
/* The switch - the box around the slider */
.switch {
    position: relative;
    display: inline-block;
    width: 60px;
    height: 34px;
}

/* Hide default HTML checkbox */
.switch input {
    opacity: 0;
    width: 0;
    height: 0;
}

/* The slider */
.slider {
    position: absolute;
    cursor: pointer;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: #ccc;
    -webkit-transition: .4s;
    transition: .4s;
}

.slider:before {
    position: absolute;
    content: "";
    height: 26px;
    width: 26px;
    left: 4px;
    bottom: 4px;
    background-color: white;
    -webkit-transition: .4s;
    transition: .4s;
}

input:checked+.slider {
    background-color: #0DD688;
}

input:focus+.slider {
    box-shadow: 0 0 1px #0DD688;
}

input:checked+.slider:before {
    -webkit-transform: translateX(26px);
    -ms-transform: translateX(26px);
    transform: translateX(26px);
}

/* Rounded sliders */
.slider.round {
    border-radius: 34px;
}

.slider.round:before {
    border-radius: 50%;
}
</style>
<script>
import AppNavbar from "../Layouts/AppNavbar.vue";
import AppSidebar from "../Layouts/AppSidebar.vue";
export default {
    components: {
        AppNavbar,
        AppSidebar,
    },
    data() {
        return {
            recordings: [],
            stream: null,
            mediaRecorder: null,
            chunks: [],
            recording: false,
            perm: true,
        }
    },
    methods: {
        getAllRecordings() {
            axios.get('get-all-recordings').then((res) => {
                this.recordings = res.data.recordings
            })
        },
        async startRecording() {
            // check if the user has granted permission to access the camera and microphone
            if (this.recording) {
                return;
            }
            if (!navigator.mediaDevices || !navigator.mediaDevices.getUserMedia) {
                // Handle the error, for example by displaying a message to the user
                console.log("MediaDevices API not supported in this browser");
                return;
            }
            try {
                // Request access to the user's camera and microphone
                this.perm = false;
                this.stream = await navigator.mediaDevices.getUserMedia({
                    video: true,
                    audio: true,
                });
                // Preview the stream in the video element
                this.$refs.preview.srcObject = this.stream;
                // Create a new MediaRecorder
                this.mediaRecorder = new MediaRecorder(this.stream);
                // Start recording and save the chunks in the data property
                this.mediaRecorder.start();
                this.mediaRecorder.ondataavailable = (e) => {
                    this.chunks.push(e.data);
                };
                this.recording = true;
            } catch (err) {
                console.log("Error while starting recording: ", err);
                this.perm = false;
                // location.reload();
            }
        },
        stopRecording() {
            if (!this.recording) {
                return;
            }
            // Stop recording and clear the stream
            this.mediaRecorder.stop();
            this.stream.getTracks().forEach((track) => track.stop());
            // Create a new Blob from the chunks and save it
            const blob = new Blob(this.chunks);
            const url = URL.createObjectURL(blob);
            // you can use this url for further use.
            this.recording = false;
        },
    },
    beforeDestroy() {
        // stop recording and clear the stream when the component is destroyed
        if (this.recording) {
            this.mediaRecorder.stop();
        }
        if (this.stream) {
            this.stream.getTracks().forEach((track) => track.stop());
        }
    },
    mounted() {
        this.getAllRecordings();
    }
};
</script>
