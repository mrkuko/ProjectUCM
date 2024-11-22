@props([
    'type' => 'man',
])

@if($type === 'man')
    <svg {{ $attributes->merge(['xmlns'=>"http://www.w3.org/2000/svg", 'xmlns:xlink'=>"http://www.w3.org/1999/xlink",
            'x'=>"0px", 'y'=>"0px", 'viewBox'=>"324.48 36.15 129.57 129.57"]) }}>
        <g>
            <ellipse transform="matrix(0.2235 -0.9747 0.9747 0.2235 203.8845 457.7993)" style="fill:#B9C4E1;" cx="389.282"
                     cy="100.931" rx="64.763" ry="64.763" />
            <ellipse style="fill:#FFFFFF;" cx="389.282" cy="92.649" rx="25.193" ry="34.894" />
            <path style="fill:#FFFFFF;"
                  d="M388.884,125.31c-21.088,0-39.94,5.054-52.478,12.993c11.73,16.566,31.033,27.391,52.876,27.391     c21.689,0,40.873-10.672,52.627-27.04C429.375,130.513,410.281,125.31,388.884,125.31z" />
            <path style="fill:#FFFFFF;"
                  d="M393.118,142.059h-7.673c-5.294,0-9.625-4.331-9.625-9.625v-21.878     c0-5.294,4.331-9.625,9.625-9.625h7.673c5.294,0,9.625,4.331,9.625,9.625v21.878C402.743,137.728,398.412,142.059,393.118,142.059     z" />
            <path style="fill:#FFFFFF;"
                  d="M368.067,94.631c0.754,5.594-0.488,10.445-2.774,10.834c-2.286,0.389-4.751-3.831-5.506-9.425     c-0.754-5.594,0.488-10.445,2.774-10.834S367.313,89.037,368.067,94.631z" />
            <path style="fill:#FFFFFF;"
                  d="M410.497,94.631c-0.754,5.594,0.488,10.445,2.774,10.834c2.286,0.389,4.751-3.831,5.506-9.425     c0.754-5.594-0.488-10.445-2.774-10.834S411.251,89.037,410.497,94.631z" />
            <path style="fill:#FFFFFF;"
                  d="M364.969,91.276c-0.847-5.586-1.694-11.172-2.542-16.757c-0.308-2.028-0.605-4.165,0.136-6.078     c0.74-1.913,2.912-3.436,4.833-2.718c-0.769-3.886,3.53-6.756,7.276-8.045c6.277-2.161,13.008-3.261,19.591-2.41     c6.584,0.851,13.012,3.763,17.45,8.7c1.405,1.563,2.615,3.338,3.284,5.329c1.288,3.833,0.468,8.016-0.362,11.973     c-0.66,3.144-1.319,6.288-1.979,9.432c-0.15,0.718-0.319,1.471-0.809,2.017c-0.781,0.87-2.098,0.935-3.267,0.937     c-12.492,0.027-24.985,0.054-37.477,0.081c-2.349,0.005-5.415-0.574-5.725-2.902" />
        </g>
    </svg>
@elseif($type === 'woman')
    <svg {{ $attributes->merge(['xmlns'=>"http://www.w3.org/2000/svg", 'xmlns:xlink'=>"http://www.w3.org/1999/xlink",
            'x'=>"0px", 'y'=>"0px", 'viewBox'=>"45.95 181.05 129.55 129.57"]) }}>
        <g>
            <circle style="fill:#B9C4E1;" cx="110.718" cy="245.831" r="64.763" />
            <ellipse style="fill:#FFFFFF;" cx="110.718" cy="235.223" rx="25.193" ry="32.568" />
            <path style="fill:#FFFFFF;"
                  d="M110.718,270.211c-20.27,0-38.12,7.319-48.581,18.425c11.868,13.459,29.227,21.959,48.581,21.959    s36.714-8.501,48.581-21.959C148.838,277.53,130.988,270.211,110.718,270.211z" />
            <path style="fill:#FFFFFF;"
                  d="M112.469,286.96h-3.501c-5.294,0-9.625-4.331-9.625-9.625v-21.878c0-5.294,4.331-9.625,9.625-9.625    h3.501c5.294,0,9.625,4.331,9.625,9.625v21.878C122.094,282.628,117.762,286.96,112.469,286.96z" />
            <path style="fill:#FFFFFF;"
                  d="M89.003,236.734c1.467,4.224,0.885,8.262-1.3,9.021c-2.185,0.759-5.145-2.05-6.611-6.274    c-1.467-4.224-0.885-8.262,1.3-9.021C84.577,229.702,87.537,232.511,89.003,236.734z" />
            <path style="fill:#FFFFFF;"
                  d="M132.433,236.734c-1.467,4.224-0.885,8.262,1.3,9.021c2.185,0.759,5.145-2.05,6.611-6.274    c1.467-4.224,0.885-8.262-1.3-9.021C136.859,229.702,133.9,232.511,132.433,236.734z" />
            <path style="fill:#FFFFFF;"
                  d="M141.626,239.548c-0.553-8.041-0.279-16.294-2.867-23.928c-2.908-8.577-9.604-15.913-18.093-19.068    c-8.49-3.155-18.623-1.855-25.717,3.776c-2.486,1.973-4.72,4.805-4.47,7.969c-4.308-1.458-9.112,1.602-11.125,5.68    c-2.014,4.078-1.915,8.845-1.628,13.384c0.839,13.303,2.867,26.942-0.731,39.763c11.04,0.334,22.081,0.668,33.122,1.003    c3.535,0.107,7.074,0.214,10.607,0.062c9.016-0.389,18.36-2.421,26.851,0.636C144.318,259.383,142.312,249.512,141.626,239.548z" />
        </g>
    </svg>
@else
    <svg {{ $attributes->merge(['xmlns'=>"http://www.w3.org/2000/svg", 'xmlns:xlink'=>"http://www.w3.org/1999/xlink",
    'x'=>"0px", 'y'=>"0px", 'viewBox'=>"185.23 325.53 129.52 129.53"]) }}>
        <g>
            <ellipse transform="matrix(0.7071 -0.7071 0.7071 0.7071 -202.7528 291.0898)" style="fill:#B9C4E1;" cx="250"
                     cy="390.289" rx="64.763" ry="64.763" />
            <ellipse style="fill:#FFFFFF;" cx="250" cy="379.681" rx="25.194" ry="32.568" />
            <path style="fill:#FFFFFF;"
                  d="M250,417.274c-21.271,0-39.738,6.187-49.059,15.267c11.877,13.777,29.442,22.511,49.059,22.511   s37.183-8.734,49.059-22.511C289.738,423.461,271.271,417.274,250,417.274z" />
            <path style="fill:#FFFFFF;"
                  d="M251.75,431.418h-3.501c-5.294,0-9.625-4.331-9.625-9.625v-21.878c0-5.294,4.331-9.625,9.625-9.625   h3.501c5.294,0,9.625,4.331,9.625,9.625v21.878C261.375,427.086,257.044,431.418,251.75,431.418z" />
            <path style="fill:#FFFFFF;"
                  d="M271.894,382.013c-0.59,4.432,0.79,8.272,3.082,8.577c2.292,0.305,4.629-3.04,5.219-7.472   c0.59-4.432-0.79-8.272-3.082-8.577C274.82,374.236,272.484,377.582,271.894,382.013z" />
            <path style="fill:#FFFFFF;"
                  d="M228.106,382.013c0.59,4.432-0.79,8.272-3.082,8.577c-2.292,0.305-4.629-3.04-5.219-7.472   c-0.59-4.432,0.79-8.272,3.082-8.577C225.18,374.236,227.516,377.582,228.106,382.013z" />
            <path style="fill:#FFFFFF;"
                  d="M252.237,374.05h-4.473c-6.6,0-12-5.4-12-12v-10.057c0-6.6,5.4-12,12-12h4.473c6.6,0,12,5.4,12,12   v10.057C264.237,368.65,258.837,374.05,252.237,374.05z" />
            <path style="fill:#FFFFFF;"
                  d="M256.012,391.109c0,0,15.151,21.96,40.833,4.466c0,0-2.605,9.712-9.677,12.486   c0,0,5.211,2.402,9.677-1.692c0,0-1.024,7.211-5.909,8.328c0,0,2.652,1.535,4.885,0c0,0-3.784,9.91-18.92,10.747   C276.901,425.445,247.606,424.189,256.012,391.109z" />
        </g>
    </svg>
@endif