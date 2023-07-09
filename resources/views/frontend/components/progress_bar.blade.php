<div class="container-progress-bar">
    <div class="progress-bar ui-progress-bar ui-container">
        <div class="ui-progress" style="width: 1%; min-width: 30%;max-width: 100%">
            <span class="ui-label"><b class="value">1%</b></span>
        </div><!-- .ui-progress -->
    </div><!-- #progress_bar --> 
</div>

<style>
    .ui-progress-bar {
        margin-top: 1em;
        margin-bottom: 1em;
        } 

        .ui-progress span.ui-label {
            font-size: .8em;
            position: absolute;
            right: 0;
            line-height: 19px;
            padding-right: 12px;
            color: rgb(255 255 255 / 85%);
            text-shadow: rgb(0 0 0 / 96%) 0 1px 0px;
            white-space: nowrap;
        }
        @-webkit-keyframes animate-stripes {
        from {
            background-position: 0 0;
        }

        to {
        background-position: 44px 0;
        }
        }      

    .ui-progress-bar {
        position: relative;
        height: 24px;
        padding-right: 2px;
        background-color: #7e7474;
        border-radius: 24px;
        -moz-border-radius: 24px;
        -webkit-border-radius: 24px;
        background: -webkit-gradient(linear, left bottom, left top, color-stop(0, #eaeaea), color-stop(1, #f1f1f1));
        background: -moz-linear-gradient(#9da5b0 0%, #b6bcc6 100%);
        -webkit-box-shadow: inset 0px 1px 2px 0px rgb(0 0 0 / 50%), 0px 1px 0px 0px #fff;
        -moz-box-shadow: inset 0px 1px 2px 0px rgba(0, 0, 0, 0.5), 0px 1px 0px 0px #FFF;
        box-shadow: inset 0px 1px 2px 0px rgb(0 0 0 / 50%), 0px 1px 0px 0px #fff;
    }        

    .ui-progress {
        position: relative;
    display: block;
    overflow: hidden;
    height: 22px;
    -moz-border-radius: 24px;
    -webkit-border-radius: 24px;
    border-radius: 24px;
    -webkit-background-size: 44px 44px;
    background-color: #0027F5;
    background: -webkit-gradient(linear, 0 0, 44 44, color-stop(0.00, rgba(255,255,255,0.17)), color-stop(0.25, rgba(255,255,255,0.17)), color-stop(0.26, rgba(255,255,255,0)), color-stop(0.50, rgba(255,255,255,0)), color-stop(0.51, rgba(255,255,255,0.17)), color-stop(0.75, rgba(255,255,255,0.17)), color-stop(0.76, rgba(255,255,255,0)), color-stop(1.00, rgba(255,255,255,0)) ), -webkit-gradient(linear, left bottom, left top, color-stop(0, #0027F5), color-stop(1, #0027F5));
    background: -moz-repeating-linear-gradient(top left -30deg, rgba(255,255,255,0.17), rgba(255,255,255,0.17) 15px, rgba(255,255,255,0) 15px, rgba(255,255,255,0) 30px ), -moz-linear-gradient(#9bdd62 0%, #74d04c 100%);
    -webkit-box-shadow: inset 0px 1px 0px 0px #0027f5, inset 0px -1px 1px #0027f5;
    -moz-box-shadow: inset 0px 1px 0px 0px #dbf383, inset 0px -1px 1px #58c43a;
    box-shadow: inset 0px 1px 0px 0px #0027f5, inset 0px -1px 1px #0027f5;
    border: 1px solid #0027F5;
    -webkit-animation: animate-stripes 2s linear infinite;
    transition: all ease .3s;
    }
</style>