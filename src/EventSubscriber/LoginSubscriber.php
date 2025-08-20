<?php
namespace App\EventSubscriber;

use App\Entity\Userlogin;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\Security\Http\Event\LoginSuccessEvent;

class LoginSubscriber implements EventSubscriberInterface
{
    private EntityManagerInterface $em;

    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }

    // On dit à Symfony quels événements on veut écouter
    public static function getSubscribedEvents(): array
    {
        return [
            LoginSuccessEvent::class => 'onLoginSuccess',
        ];
    }

    // Cette méthode est appelée à chaque connexion réussie
    public function onLoginSuccess(LoginSuccessEvent $event): void
    {
        $userLogin = new Userlogin();
        $userLogin->setUser($event->getUser());
        $userLogin->setLoginAt(new \DateTimeImmutable());
        $userLogin->setSuccess(true);

        $this->em->persist($userLogin);
        $this->em->flush();
    }
}
