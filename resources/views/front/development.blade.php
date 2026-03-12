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

let scene, camera, renderer, controls;

scene = new THREE.Scene();
scene.background = new THREE.Color(0x111111);

camera = new THREE.PerspectiveCamera(
75,
window.innerWidth/window.innerHeight,
0.1,
1000
);

renderer = new THREE.WebGLRenderer({antialias:true});
renderer.setSize(window.innerWidth, window.innerHeight);
document.body.appendChild(renderer.domElement);

// controls
controls = new OrbitControls(camera, renderer.domElement);
controls.enableDamping = true;

// lighting
scene.add(new THREE.AmbientLight(0xffffff,2));

const light = new THREE.DirectionalLight(0xffffff,3);
light.position.set(5,10,7);
scene.add(light);

// load model
const loader = new GLTFLoader();

loader.load('./3d/desktop_pc/scene.gltf', (gltf)=>{

const model = gltf.scene;
scene.add(model);

// auto center camera
const box = new THREE.Box3().setFromObject(model);
const center = box.getCenter(new THREE.Vector3());
const size = box.getSize(new THREE.Vector3()).length();

camera.position.set(size,size,size);
camera.lookAt(center);

controls.target.copy(center);
controls.update();

});

// resize
window.addEventListener("resize",()=>{

camera.aspect = window.innerWidth/window.innerHeight;
camera.updateProjectionMatrix();
renderer.setSize(window.innerWidth, window.innerHeight);

});

// animation
function animate(){

requestAnimationFrame(animate);
controls.update();
renderer.render(scene,camera);

}

animate();

</script>
@endpush
