<?php

abstract class State {
    public abstract function action1(Context $context);
    public abstract function action2(Context $context);
}
