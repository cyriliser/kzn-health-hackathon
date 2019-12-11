<?php require_once("../header.php"); ?>

<body>
    <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4" style="padding-bottom: 1rem !important;">
                <div class="card-body pb-0 mx-auto">

                        <!-- CPT Code -->
                        <label class="label ">Select Ward</label>
                        <div class="input-group">
                            <div class="rs-select2 js-select-simple select--no-search ">
                                <select name="subject">
                                    <option>TB Ward</option>
                                    <option>Labour Ward</option>
                                    <option>Ward 3</option>
                                    <option>Ward 4</option>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>

                        <div class="output row my-5">
                            <h1 class="mx-2"><span class="badge badge-secondary">5</span></h1> 
                            <h3 class="mx-2"> Beds Available</h3>
                        </div>
                        <center class="mx-auto">
                            <button class="btn btn--radius-2 btn--blue" type="submit">Done</button>
                        </center>
                    </form>
                </div>
            </div>
        </div>
    </div>

<?php require_once("../footer.php");?>