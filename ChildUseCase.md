# Child Use Case

## Title
Children interacting with system

## Description
Children are given permissions from admin to do various activities. They can change attributes about the house, like lights and music, as long as they have google home like stuff.

## Triggers
Child does something or moves.

## Actors
Child, Parent

## Preconditions
Children (or a child) are registered as users. House is set up (with the program running).

## Main Success Scenario (Goals)
- Child can turn on lights and music, if they are allowed to.
- Children location is monitored. If they go somewhere suspicious, parent is notified. Also if baby starts crying.

## Failed End Condition
- Lights/music do not turn on with command.
- Parent and other allowed users are unable to tell where the children are.
- baby crying does not send alert

## Extensions
- Light/music do not turn on:
    1. Children have their own login to website, where they can operate lights/music.
- Child location does not exit:
    1. Attempt reconnect to child cellphone gps.
    2. Try again every half hour.
    3. Do not display child location when location is unknown.
- Baby cry alert does not send:
    1. Have option to change upset baby detection method (to strict volume based, for example).

## Steps of Execution (Requirements)
- Connect with music/light software
- Update child's location
- Recognize cry.
- Security to keep others from accessing information or manipulate house using software.

## A use case diagram
<figure class="image">
  <img src="{{ include.url }}" alt="{{ include.description }}">
  <figcaption>{{ include.description }}</figcaption>
</figure>
{% include image.html url="KidUseCase.png" description="Diagram showing effect of children on system and how parent could affect these effects" %}

## Dependent Use Cases
Parent Use Case
