<svg id="henosisLayer">
  <filter id="blurMe" x="-10" y="-10" width="20" height="20">
    <feGaussianBlur in="SourceGraphic" stdDeviation="5" />
  </filter>
  <circle id="shadow" cx="50%" cy="50%" r="20" fill="grey" filter="url(#blurMe)" />
  <circle id="henosis" cx="50%" cy="50%" r="20" stroke="yellow" stroke-width="0" fill="white" />
</svg>
