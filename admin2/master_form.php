<!DOCTYPE html>
<html lang="en">

<head>
    <?php include './assets/_head.php'; ?>
    <style>
        thead th,
        td {
            text-align: center;
        }
    </style>
</head>
<!-- header and sidebar -->
<?php include './assets/_header.php'; ?>
<!--// header and sidebar -->

<!-- Right side column all content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-xs-12 ">
                    <h1> Applicant's Detail</h1>
                </div>
                <div class="col-xs-12 ">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="./dashboard.php">Dashboard</a></li>
                        <li class="breadcrumb-item "> <a href="Profiles_List.php"> Applicant List</a></li>
                        <li class="breadcrumb-item active">Applicant's detail </li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- START CUSTOM TABS -->

        <div class="row">
            <div class="col-md-12">
                <!-- Custom Tabs -->
                <div>
                    <!-- class="nav-tabs-custom" -->
                    <ul class="nav nav-pills nav-justified">
                        <!-- nav nav-tabs -->
                        <li class="nav-item">
                            <a class="nav-link " aria-current="page" href="#tab_1" data-toggle="tab">
                                Applicant’s Details
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#tab_2" data-toggle="tab">
                                Inventor's Details
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#tab_3" data-toggle="tab">
                                Technicals Details

                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#tab_4" data-toggle="tab">
                                Documents
                            </a>
                        </li>


                    </ul>
                    <div class="tab-content">
                        <!-- Tab 1: Basic Detail -->
                        <div class="tab-pane active table-responsive" id="tab_1" style="padding-top:40px">
                            <div>
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th scope="col">S.no</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Organization_Name</th>
                                            <th scope="col">Organization_Address</th>
                                            <th scope="col">Contact</th>
                                            <th scope="col">Alternate</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>Delta</td>
                                            <td>GGN</td>
                                            <td>3456789345</td>
                                            <td>34564567</td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- Tab 2: inventors Detail -->
                        <div class="tab-pane" id="tab_2">
                            <div class="table-responsive">
                                <table class="table hd">
                                    <thead>
                                        <th id="hd" colspan="9">
                                            <h3>Inventors Details</h3>
                                        </th>
                                    </thead>
                                    <thead>
                                        <tr>
                                            <th scope="col">ID</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Organization Name</th>
                                            <th scope="col">Organization Address</th>
                                            <th scope="col">Contact number</th>
                                            <th scope="col">Alternate Contact number</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">
                                                <p>1
                                                </p>
                                            </th>
                                            <td>
                                                <p>
                                                    ajay
                                                </p>
                                            </td>
                                            <td>
                                                <p>
                                                    ajaaycdf@gmai.com
                                                </p>
                                            </td>
                                            <td>
                                                <p>
                                                    letsphonese
                                                </p>
                                            </td>
                                            <td>
                                                <p>
                                                    cu chitakara unverity
                                                </p>
                                            </td>
                                            <td>
                                                <p>
                                                    232434242422
                                                </p>
                                            </td>
                                            <td>
                                                <p>
                                                    23232323244223
                                                </p>
                                            </td>

                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                            <table class="table">
                                <th id="hd" colspan="4">
                                    <h3> Startup Details</h3>
                                </th>
                            </table>
                            <table class="table">
                                <!-- <th id="hd" colspan="4">
                                    <h3> Startup Details</h3>
                                </th> -->
                                <thead>
                                    <tr>
                                        <th scope="row">
                                            <p>
                                                Type of applicant:
                                            </p>
                                        </th>
                                        <th scope="row">
                                            <p>
                                                Startup/Registered startup:
                                            </p>

                                        </th>
                                        <th scope="row">
                                            <p>
                                                DPIIT Recognized Startup:
                                            </p>

                                        </th>
                                        <th scope="row">
                                            <p>
                                                Residential Address for Individual Innovator:
                                            </p>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <p>
                                                name
                                            </p>
                                        </td>
                                        <td>
                                            <p>
                                                solution
                                            </p>
                                        </td>
                                        <td>
                                            <p>
                                                name
                                            </p>
                                        </td>
                                        <td>
                                            <p>
                                                Address
                                            </p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- Tab 3: Technical Details -->
                        <div class="tab-pane table-responsive" id="tab_3">
                            <table class="table">
                                <!-- <th id="hd"colspan="4">
                                    <h3>Technical Details</h3>
                                </th> -->
                                <thead>
                                    <th scope="col" id="hd" colspan="4">
                                        <h3>Technical Details</h3>
                                    </th>
                                </thead>
                                <thead>
                                    <tr>
                                        <th class="align-top">
                                            <h4>
                                                Domain of invention:
                                            </h4>
                                        <td>

                                            <p>The European languages are members of the same family. Their separate
                                                existence is a myth.
                                                For science, music, sport, etc, Europe uses the same vocabulary. The
                                                languages only differ
                                                in their grammar, their pronunciation and their most common words.
                                                Everyone
                                                realizes why a
                                                new common language would be desirable: one could refuse to pay
                                                expensive
                                                translators. To
                                                achieve this, it would be necessary to have uniform grammar,
                                                pronunciation
                                                and more common
                                                words. If several languages coalesce, the grammar of the resulting
                                                language</p>

                                        </td>
                                        </th>
                                        <th class="align-top">
                                            <h4>
                                                The invention/technology is at which stage in terms of development:
                                            </h4>
                                        <td>
                                            <p>
                                                The European languages are members of the same family. Their separate
                                                existence is a myth.
                                                For science, music, sport, etc, Europe uses the same vocabulary. The
                                                languages only differ
                                                in their grammar, their pronunciation and their most common words.
                                                Everyone
                                                realizes why a
                                                new common language would be desirable: one could refuse to pay
                                                expensive
                                                translators. To
                                                achieve this, it would be necessary to have uniform grammar,
                                                pronunciation
                                                and more common
                                                words. If several languages coalesce, the grammar of the resulting
                                                language
                                                is more simple
                                                and regular than that of the individual languages.
                                            </p>
                                        </td>
                                        </th>
                                    </tr>
                                    <tr>
                                        <th scope="col">
                                            <h4>
                                                How does the invention work and what are the components of the invention
                                                :
                                            </h4>
                                        <td>
                                            <p>
                                                The European languages are members of the same family. Their separate
                                                existence is a myth.
                                                For science, music, sport, etc, Europe uses the same vocabulary. The
                                                languages only differ
                                                in their grammar, their pronunciation and their most common words.
                                                Everyone
                                                realizes why a
                                                new common language would be desirable: one could refuse to pay
                                                expensive
                                                translators. To
                                                achieve this, it would be necessary to have uniform grammar,
                                                pronunciation
                                                and more common
                                                words. If several languages coalesce, the grammar of the resulting
                                                language
                                                is more simple
                                                and regular than that of the individual languages.
                                            </p>
                                        </td>
                                        </th>
                                        <th scope="col">
                                            <h4>
                                                Does the invention fill/address a major gap in prior art? :
                                            </h4>
                                        <td>
                                            <p>
                                                The European languages are members of the same family. Their separate
                                                existence is a myth.
                                                For science, music, sport, etc, Europe uses the same vocabulary. The
                                                languages only differ
                                                in their grammar, their pronunciation and their most common words.
                                                Everyone
                                                realizes why a
                                                new common language would be desirable: one could refuse to pay
                                                expensive
                                                translators. To
                                                achieve this, it would be necessary to have uniform grammar,
                                                pronunciation
                                                and more common
                                                words. If several languages coalesce, the grammar of the resulting
                                                language
                                                is more simple
                                                and regular than that of the individual languages.
                                            </p>
                                        </td>
                                        </th>
                                    </tr>
                                    <tr>
                                        <th scope="col">
                                            <h4>
                                                Highlight the technical advancement:
                                            </h4>
                                        <td>
                                            <p>
                                                The European languages are members of the same family. Their separate
                                                existence is a myth.
                                                For science, music, sport, etc, Europe uses the same vocabulary. The
                                                languages only differ
                                                in their grammar, their pronunciation and their most common words.
                                                Everyone
                                                realizes why a
                                                new common language would be desirable: one could refuse to pay
                                                expensive
                                                translators. To
                                                achieve this, it would be necessary to have uniform grammar,
                                                pronunciation
                                                and more common
                                                words. If several languages coalesce, the grammar of the resulting
                                                language
                                                is more simple
                                                and regular than that of the individual languages.
                                            </p>
                                        </td>
                                        </th>
                                        <th scope="col">
                                            <h4>
                                                Enlist all possible applications for your invention:
                                            </h4>
                                        <td>
                                            <p>
                                                The European languages are members of the same family. Their separate
                                                existence is a myth.
                                                For science, music, sport, etc, Europe uses the same vocabulary. The
                                                languages only differ
                                                in their grammar, their pronunciation and their most common words.
                                                Everyone
                                                realizes why a
                                                new common language would be desirable: one could refuse to pay
                                                expensive
                                                translators. To
                                                achieve this, it would be necessary to have uniform grammar,
                                                pronunciation
                                                and more common
                                                words. If several languages coalesce, the grammar of the resulting
                                                language
                                                is more simple
                                                and regular than that of the individual languages.
                                            </p>
                                        </td>
                                        </th>
                                    </tr>
                                    <tr>
                                        <th scope="col">
                                            <h4>
                                                Please explain how your invention is novel and innovative:
                                            </h4>
                                        <td>
                                            <p>
                                                The European languages are members of the same family. Their separate
                                                existence is a myth.
                                                For science, music, sport, etc, Europe uses the same vocabulary. The
                                                languages only differ
                                                in their grammar, their pronunciation and their most common words.
                                                Everyone
                                                realizes why a
                                                new common language would be desirable: one could refuse to pay
                                                expensive
                                                translators. To
                                                achieve this, it would be necessary to have uniform grammar,
                                                pronunciation
                                                and more common
                                                words. If several languages coalesce, the grammar of the resulting
                                                language
                                                is more simple
                                                and regular than that of the individual languages.
                                            </p>
                                        </td>
                                        </th>
                                        <th scope="col">
                                            <h4>
                                                What is the inventive step involved in your invention which is
                                                non-obvious
                                                to the persons skilled in the art:
                                            </h4>
                                        <td>
                                            <p>
                                                The European languages are members of the same family. Their separate
                                                existence is a myth.
                                                For science, music, sport, etc, Europe uses the same vocabulary. The
                                                languages only differ
                                                in their grammar, their pronunciation and their most common words.
                                                Everyone
                                                realizes why a
                                                new common language would be desirable: one could refuse to pay
                                                expensive
                                                translators. To
                                                achieve this, it would be necessary to have uniform grammar,
                                                pronunciation
                                                and more common
                                                words. If several languages coalesce, the grammar of the resulting
                                                language
                                                is more simple
                                                and regular than that of the individual languages.
                                            </p>
                                        </td>
                                        </th>
                                    </tr>
                                    <tr>
                                        <th scope="col">
                                            <h4>
                                                Is it a process or product or both:
                                            </h4>
                                        <td>
                                            <p>
                                                The European languages are members of the same family. Their separate
                                                existence is a myth.
                                                For science, music, sport, etc, Europe uses the same vocabulary. The
                                                languages only differ
                                                in their grammar, their pronunciation and their most common words.
                                                Everyone
                                                realizes why a
                                                new common language would be desirable: one could refuse to pay
                                                expensive
                                                translators. To
                                                achieve this, it would be necessary to have uniform grammar,
                                                pronunciation
                                                and more common
                                                words. If several languages coalesce, the grammar of the resulting
                                                language
                                                is more simple
                                                and regular than that of the individual languages.
                                            </p>
                                        </td>
                                        </th>
                                        <th scope="col">
                                            <h4>
                                                Is there any provisional patent application that has already been filed
                                                for
                                                the same invention :
                                            </h4>
                                        <td>
                                            <p>
                                                The European languages are members of the same family. Their separate
                                                existence is a myth.
                                                For science, music, sport, etc, Europe uses the same vocabulary. The
                                                languages only differ
                                                in their grammar, their pronunciation and their most common words.
                                                Everyone
                                                realizes why a
                                                new common language would be desirable: one could refuse to pay
                                                expensive
                                                translators. To
                                                achieve this, it would be necessary to have uniform grammar,
                                                pronunciation
                                                and more common
                                                words. If several languages coalesce, the grammar of the resulting
                                                language
                                                is more simple
                                                and regular than that of the individual languages.
                                            </p>
                                        </td>
                                        </th>
                                    </tr>
                                    <tr>
                                        <th scope="col">
                                            <h4>
                                                Is there any form of intellectual property, associated with invention
                                                that
                                                has already been filed/sought:
                                            </h4>
                                        <td>
                                            <p>
                                                The European languages are members of the same family. Their separate
                                                existence is a myth.
                                                For science, music, sport, etc, Europe uses the same vocabulary. The
                                                languages only differ
                                                in their grammar, their pronunciation and their most common words.
                                                Everyone
                                                realizes why a
                                                new common language would be desirable: one could refuse to pay
                                                expensive
                                                translators. To
                                                achieve this, it would be necessary to have uniform grammar,
                                                pronunciation
                                                and more common
                                                words. If several languages coalesce, the grammar of the resulting
                                                language
                                                is more simple
                                                and regular than that of the individual languages.
                                            </p>
                                        </td>
                                        </th>
                                        <th scope="col">
                                            <h4>
                                                If the technology/invention is funded under any government
                                                schemes/grant/calls:
                                            </h4>
                                        <td>
                                            <p>
                                                The European languages are members of the same family. Their separate
                                                existence is a myth.
                                                For science, music, sport, etc, Europe uses the same vocabulary. The
                                                languages only differ
                                                in their grammar, their pronunciation and their most common words.
                                                Everyone
                                                realizes why a
                                                new common language would be desirable: one could refuse to pay
                                                expensive
                                                translators. To
                                                achieve this, it would be necessary to have uniform grammar,
                                                pronunciation
                                                and more common
                                                words. If several languages coalesce, the grammar of the resulting
                                                language
                                                is more simple
                                                and regular than that of the individual languages.
                                            </p>
                                        </td>
                                        </th>
                                    </tr>
                                    <tr>
                                        <th scope="col">
                                            <h4>
                                                Have you disclosed you invention in public domain? :
                                            </h4>
                                        <td>
                                            <p>
                                                The European languages are members of the same family. Their separate
                                                existence is a myth.
                                                For science, music, sport, etc, Europe uses the same vocabulary. The
                                                languages only differ
                                                in their grammar, their pronunciation and their most common words.
                                                Everyone
                                                realizes why a
                                                new common language would be desirable: one could refuse to pay
                                                expensive
                                                translators. To
                                                achieve this, it would be necessary to have uniform grammar,
                                                pronunciation
                                                and more common
                                                words. If several languages coalesce, the grammar of the resulting
                                                language
                                                is more simple
                                                and regular than that of the individual languages.
                                            </p>
                                        </td>
                                        </th>
                                        <th scope="col">
                                            <h4>
                                                Mention date of disclosure as per previous question :
                                            </h4>
                                        <td>
                                            <p>
                                                The European languages are members of the same family. Their separate
                                                existence is a myth.
                                                For science, music, sport, etc, Europe uses the same vocabulary. The
                                                languages only differ
                                                in their grammar, their pronunciation and their most common words.
                                                Everyone
                                                realizes why a
                                                new common language would be desirable: one could refuse to pay
                                                expensive
                                                translators. To
                                                achieve this, it would be necessary to have uniform grammar,
                                                pronunciation
                                                and more common
                                                words. If several languages coalesce, the grammar of the resulting
                                                language
                                                is more simple
                                                and regular than that of the individual languages.
                                            </p>
                                        </td>
                                        </th>
                                    </tr>
                                    <tr>
                                        <th scope="col">
                                            <h4>
                                                Looking for type of IP :
                                            </h4>
                                        <td>
                                            <p>
                                                The European languages are members of the same family. Their separate
                                                existence is a myth.
                                                For science, music, sport, etc, Europe uses the same vocabulary. The
                                                languages only differ
                                                in their grammar, their pronunciation and their most common words.
                                                Everyone
                                                realizes why a
                                                new common language would be desirable: one could refuse to pay
                                                expensive
                                                translators. To
                                                achieve this, it would be necessary to have uniform grammar,
                                                pronunciation
                                                and more common
                                                words. If several languages coalesce, the grammar of the resulting
                                                language
                                                is more simple
                                                and regular than that of the individual languages.
                                            </p>
                                        </td>
                                        </th>
                                    </tr>
                                </thead>
                            </table>
                            <table class="table">
                                <thead>
                                    <th scope="col" id="hd" colspan="6">
                                        <h3>Details of the Invention</h3>
                                    </th>
                                </thead>
                                <thead>
                                    <tr>
                                        <th scope="col">
                                            <h4>
                                                Problem Statement:
                                            </h4>
                                        <td>
                                            <p>
                                                The European languages are members of the same family. Their separate
                                                existence is a myth.
                                                For science, music, sport, etc, Europe uses the same vocabulary. The
                                                languages only differ
                                                in their grammar, their pronunciation and their most common words.
                                                Everyone
                                                realizes why a
                                                new common language would be desirable: one could refuse to pay
                                                expensive
                                                translators. To
                                                achieve this, it would be necessary to have uniform grammar,
                                                pronunciation
                                                and more common
                                                words. If several languages coalesce, the grammar of the resulting
                                                language
                                                is more simple
                                                and regular than that of the individual languages.
                                            </p>
                                        </td>
                                        </th>
                                        <th scope="col">
                                            <h4>
                                                Solution:
                                            </h4>
                                        <td>
                                            <p>
                                                The European languages are members of the same family. Their separate
                                                existence is a myth.
                                                For science, music, sport, etc, Europe uses the same vocabulary. The
                                                languages only differ
                                                in their grammar, their pronunciation and their most common words.
                                                Everyone
                                                realizes why a
                                                new common language would be desirable: one could refuse to pay
                                                expensive
                                                translators. To
                                                achieve this, it would be necessary to have uniform grammar,
                                                pronunciation
                                                and more common
                                                words. If several languages coalesce, the grammar of the resulting
                                                language
                                                is more simple
                                                and regular than that of the individual languages.
                                            </p>
                                        </td>
                                        </th>
                                        <th scope="col">
                                            <h4>
                                                Industrial Application/Commercial Potential:
                                            </h4>
                                        <td>
                                            <p>
                                                The European languages are members of the same family. Their separate
                                                existence is a myth.
                                                For science, music, sport, etc, Europe uses the same vocabulary. The
                                                languages only differ
                                                in their grammar, their pronunciation and their most common words.
                                                Everyone
                                                realizes why a
                                                new common language would be desirable: one could refuse to pay
                                                expensive
                                                translators. To
                                                achieve this, it would be necessary to have uniform grammar,
                                                pronunciation
                                                and more common
                                                words. If several languages coalesce, the grammar of the resulting
                                                language
                                                is more simple
                                                and regular than that of the individual languages.
                                            </p>
                                        </td>
                                        </th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                        <!-- Tab 4: Documents -->
                        <div class="tab-pane table-responsive" id="tab_4">
                            <table class="table">
                                <thead>
                                    <th id="hd" colspan="3">
                                        <h3>
                                            Documents
                                        </h3>
                                    </th>
                                </thead>
                                <thead>
                                    <tr>
                                        <th scope="col">
                                            <p>
                                                Startup DPIIT Certificate
                                            </p>
                                        <td>
                                            <a href="./assets/images/avatar.png"><span
                                                    class="material-symbols-outlined">
                                                    <span class="material-symbols-outlined">
                                                        visibility
                                                    </span>
                                                </span></a>
                                        </td>
                                        </th>
                                    </tr>
                                    <tr>
                                        <th scope="col">
                                            <p>
                                                Aadhar card for individual innovator
                                            </p>
                                        <td>
                                            <a href="./assets/images/avatar2.png"><span
                                                    class="material-symbols-outlined">
                                                    <span class="material-symbols-outlined">
                                                        visibility
                                                    </span>
                                                </span></a>
                                        </td>
                                        </th>
                                    </tr>
                                    <tr>
                                        <th scope="col">
                                            <p>
                                                Invention Photo/Images
                                            </p>
                                        <td>
                                            <a href="./assets/images/avatar3.png"><span
                                                    class="material-symbols-outlined">
                                                    <span class="material-symbols-outlined">
                                                        visibility
                                                    </span>
                                                </span></a>
                                        </td>
                                        </th>
                                    </tr>
                                    <tr>
                                        <th scope="col">
                                            <p>
                                                Invention Video Link
                                            </p>
                                        <td>
                                            <a href="./assets/images/avatar5.png"><span
                                                    class="material-symbols-outlined">
                                                    <span class="material-symbols-outlined">
                                                        visibility
                                                    </span>
                                                </span></a>
                                        </td>
                                        </th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                    <!-- /.tab-content -->
                </div><!-- nav-tabs-custom -->
            </div><!-- /.col -->
        </div> <!-- /.row -->
        <!-- END CUSTOM TABS -->
    </section>

</div><!-- /.content-wrapper -->

<!-- footer -->
<?php include './assets/_footer.php'; ?>
<!--// footer -->