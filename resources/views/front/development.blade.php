@extends('layouts.guestLayout')
@section('content')
    <x-breadcrumb title="Our Strategy" page="Strategy" />

    <div id="fixedContent" class="w-100 row align-items-center m-0" style="padding: 0px 10%;position: relative;">
        <div class="col-md-6">
            <h1 class="strategy-title uppercase animate__animated animate__zoomIn">
                <span class="fw-bold">Sales Funnel </span>
                <span>Strategy</span>
            </h1>
            <h1 class="strategy-sub-title animate__animated animate__zoomIn">
                <span>That </span>
                <span class="fw-bold">Converts Visitors </span>
                <span>into Customers </span>
            </h1>

            <span style="color: #e9e9e9" class="d-block my-4 animate__animated animate__zoomIn">We architect structured
                revenue systems that transform traffic
                into
                predictable growth.</span>

            <div class="flex gap-5 my-10 animate__animated animate__bounceInDown">

                <button class="btn funnel-btn text-white fw-bold px-4 py-3 rounded shadow">
                    Get Funnel Blueprint
                </button>
                <button class="btn strategy-btn fw-bold px-4 py-3 rounded shadow">
                    Book strategy call
                </button>
            </div>

            <div class="mt-5">

                <div class="d-flex align-items-center gap-3 mb-3 animate__animated animate__fadeInLeft">
                    <div class="list-circle d-flex justify-content-center align-items-center fw-bold"
                        style="height:35px;width:35px;background:white;font-size:14px;">
                        01
                    </div>
                    <h5 class="text-white fw-bold mb-0">Framework for Profit</h5>
                </div>

                <div class="d-flex align-items-center gap-3 mb-3 animate__animated animate__fadeInLeft"
                    style="animation-delay: 0.2s">
                    <div class="list-circle d-flex justify-content-center align-items-center fw-bold"
                        style="height:35px;width:35px;background:white;font-size:14px;">
                        02
                    </div>
                    <h5 class="text-white fw-bold mb-0">Data Driven Execution</h5>
                </div>

                <div class="d-flex align-items-center gap-3 mb-3 animate__animated animate__fadeInLeft"
                    style="animation-delay: 0.4s">
                    <div class="list-circle d-flex justify-content-center align-items-center fw-bold"
                        style="height:35px;width:35px;background:white;font-size:14px;">
                        03
                    </div>
                    <h5 class="text-white fw-bold mb-0">Scalable Growth System</h5>
                </div>

            </div>
        </div>
        <div class="col-md-6">
    <div id="3d_render" style="height:500px;width:100%"></div>
        </div>
    </div>
    
@endsection
@push('script')
<script type="importmap">
{
  "imports": {
    "three": "https://cdn.jsdelivr.net/npm/three@0.160/build/three.module.js",
    "three/examples/jsm/": "https://cdn.jsdelivr.net/npm/three@0.160/examples/jsm/"
  }
}
</script>
   <script type="module">

import * as THREE from "three";
import { GLTFLoader } from "three/examples/jsm/loaders/GLTFLoader.js";
import { OrbitControls } from "three/examples/jsm/controls/OrbitControls.js";

const container = document.getElementById("3d_render");

// Scene
const scene = new THREE.Scene();

// Camera
const camera = new THREE.PerspectiveCamera(
75,
container.clientWidth / container.clientHeight,
0.1,
1000
);

// Renderer
const renderer = new THREE.WebGLRenderer({ antialias:true, alpha:true });
renderer.setSize(container.clientWidth, container.clientHeight);

container.appendChild(renderer.domElement);

// Controls
const controls = new OrbitControls(camera, renderer.domElement);
controls.enableDamping = true;

// Lighting
scene.add(new THREE.AmbientLight(0xffffff,2));

const light = new THREE.DirectionalLight(0xffffff,3);
light.position.set(5,10,7);
scene.add(light);

// Load Model
const loader = new GLTFLoader();

loader.load('/3d/desktop_pc/scene.gltf', function(gltf){

const model = gltf.scene;
scene.add(model);

// Center camera to model
const box = new THREE.Box3().setFromObject(model);
const center = box.getCenter(new THREE.Vector3());
const size = box.getSize(new THREE.Vector3()).length();

camera.position.set(size, size/2, size);
camera.lookAt(center);

controls.target.copy(center);
controls.update();

});

// Resize
window.addEventListener("resize", ()=>{

const width = container.clientWidth;
const height = container.clientHeight;

camera.aspect = width/height;
camera.updateProjectionMatrix();

renderer.setSize(width, height);

});

// Animation
function animate(){

requestAnimationFrame(animate);

controls.update();

renderer.render(scene,camera);

}

animate();

</script>
@endpush
