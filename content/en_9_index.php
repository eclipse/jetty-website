<?php
/**
 * Copyright (c) 2014, 2015, 2016, 2018 Eclipse Foundation.
 *
 * This program and the accompanying materials are made
 * available under the terms of the Eclipse Public License 2.0
 * which is available at https://www.eclipse.org/legal/epl-2.0/
 *
 * Contributors:
 *   Christopher Guindon (Eclipse Foundation) - Initial implementation
 *   Eric Poirier (Eclipse Foundation)
 *
 * SPDX-License-Identifier: EPL-2.0
 */
?>



<script type="text/javascript">
    function resizeIframe(iframe) {
        iframe.height = iframe.contentWindow.document.body.scrollHeight + "px";
        iframe.width = iframe.contentWindow.document.body.scrollWidth + "px";

    }
</script>

<!-- Main content area -->
<div id="midcolumn">
    <?php include ("en_doc_header.php"); ?>

    <iframe onload="resizeIframe(this)" style="width: 100%;border: none" src="/jetty/documentation/jetty-9/index.html" title="Jetty 9: Documentation"/>
</div>
<!-- ./end  #midcolumn -->

<!-- Start of the right column -->

<div id="rightcolumn">
  <div class="sideitem">
    <h2>Quick Links</h2>
    <ul>
        <li><a target="_self" href="/jetty/documentation/jetty-11/operations_guide.php">Jetty 11 Operations Guide</a></li>
        <li><a target="_self" href="/jetty/documentation/jetty-11/programming_guide.php">Jetty 11 Programming Guide</a></li>
        <li><a target="_self" href="/jetty/documentation/jetty-10/operations_guide.php">Jetty 10 Operations Guide</a></li>
        <li><a target="_self" href="/jetty/documentation/jetty-10/programming_guide.php">Jetty 10 Programming Guide</a></li>
        <li><a target="_self" href="/jetty/documentation/jetty-9/index.php">Jetty 9 Documentation</a></li>
    </ul>
  </div>
</div>

<!-- ./end  #rightcolumn -->
