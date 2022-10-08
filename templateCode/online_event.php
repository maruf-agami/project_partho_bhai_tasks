<style>
    /* #online_events_section {
        background-color: #f9f6ef;
        position: relative;
        background: url("assets/image/bg_image_05.jpg") no-repeat center center fixed #6b6b6b;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover
    } */

    #online_events_section .title {
        font-size: 3em;
        color: var(--first-nav-back);
        text-align: center;
        font-family: 'Roboto Condensed', sans-serif;
        margin-bottom: 15px;
    }

    #online_events_section .card {
        cursor: pointer;
        box-shadow: 0px 1px 4px 0px rgb(0 0 0 / 25%);
    }

    #online_events_section .card:hover {
        box-shadow: 0 0.5rem 1rem rgb(0 0 0 / 15%);
    }

    #online_events_section .card img {
        transition: all .8s ease-out;
    }

    #online_events_section .card img:hover {
        transform: scale(1.08);
    }

    .date_overlay {
        background-color: var(--first-nav-back);
        text-align: center;
        width: 80px;
        height: 80px;
        color: #fff;
        font-size: 20px;
        margin-top: -41px;
        z-index: 10;
        padding: 10px;
        margin-left: 20px;
    }
</style>

<section id="online_events_section" class="">
    <div class="container-fluid px-lg-5">
        <div class="text-uppercase font-weight-bold text-center pt-5" style="color: var(--first-nav-back);letter-spacing: 2px;">We Together</div>
        <div class="title group_title mx-auto">Event Highlights</div>

        <div class="position-relative mt-4" style="min-height:200px;">
            <div class="target_container container" data-templateurl="shared/templates/online_event/1.php,shared/templates/online_event/2.php">

            </div>
        </div>

        <div class="text-center mb-5">
            <a href="events.php" class="btn btn-lg btn-first-theme font-size-lg px-3">
                See More Events
                <!-- <i class="fas fa-angle-double-down ml-2"></i> -->
            </a>
        </div>
    </div>
</section>

<script>
    class OnlineEventsHandler extends LandingPageContentHandler {
        appendOne(value, templateString) {
            let eventDateTime = new Date(value.event_date + " " + value.event_time);

            value.month_short = eventDateTime.toLocaleString('default', {
                month: 'short'
            });
            value.date = eventDateTime.getDate().toString().padStart(2, 0);
            value.datetime = `${value.month_short} ${value.date}, ${eventDateTime.getFullYear()} ${eventDateTime.toLocaleString('default', {
                timeStyle: 'short'
            })}`;

            super.appendOne(value, templateString);
        }
    }

    let onlineEventsHandler = new OnlineEventsHandler({
        readURL: `php/ui/landingpage/get_landing_page_event.php`
    }, `#online_events_section`, `Events`);

    // console.log(`onlineEventsHandler =>`, onlineEventsHandler);
</script>